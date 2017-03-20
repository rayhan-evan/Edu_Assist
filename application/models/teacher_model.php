<?php
class Teacher_Model  extends CI_Model{
    //put your code here
    public function save_teacher_info($data)
    {
        $this->db->insert('tbl_teacher',$data);
    }

    public function check_teacher_login_info($email_address, $password)
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where ('email_address',$email_address);
        $this->db->where ('password',md5($password));
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;

    }

    public function select_all_published_faculty()
    {
        $this->db->select('*');
        $this->db->from('tbl_faculty');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function select_teacher_info_by_teacher_id($teacher_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('teacher_id',$teacher_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_teacher_content_info_by_teacher_content_id($teacher_content_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher_content');
        $this->db->where('teacher_content_id',$teacher_content_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_published_teacher_content_info() {
        $this->db->select('*');
        $this->db->from('tbl_teacher_content');
      //  $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function update_teacher_info_by_teacher_id($data, $teacher_id)
    {
    $this->db->where('teacher_id', $teacher_id);
    $this->db->update('tbl_teacher', $data);
    }

    public function save_teacher_content_info($data)
    {
        $this->db->insert('tbl_teacher_content',$data);
    }

}

?>
