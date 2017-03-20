<?php
class Student_Model  extends CI_Model{
    //put your code here
    public function save_student_info($data)
    {
        $this->db->insert('tbl_student',$data);
	}

  public function check_student_login_info($email_address, $password)
  {
      $this->db->select('*');
      $this->db->from('tbl_student');
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

    public function select_student_info_by_student_id($student_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->where('student_id',$student_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}

?>
