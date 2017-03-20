<?php

class Welcome_Model extends CI_Model {

    //put your code here

    public function select_all_published_faculty() {
        $this->db->select('*');
        $this->db->from('tbl_faculty');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_faculty_info_by_faculty_id($faculty_id) {
        $this->db->select('*');
        $this->db->from('tbl_faculty');
        $this->db->where('faculty_id', $faculty_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_department_info_by_department_id($department_id) {
        $this->db->select('*');
        $this->db->from('tbl_department');
        $this->db->where('department_id', $department_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_all_published_department() {
        $this->db->select('*');
        $this->db->from('tbl_department');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_dept_by_dept_id($department_id)
    {
      $this->db->select('*');
      $this->db->from('tbl_department');
      $this->db->where('publication_status', 1);
      $this->db->where('department_id',$department_id);
      $query_result = $this->db->get();
      $result = $query_result->row();
      return $result;
    }


    public function select_departments($facultyName = null) {
        $this->db->select('*');
        $this->db->from('tbl_faculty');
        $this->db->where('faculty_name', trim($facultyName));
        $q = $this->db->get();
        $r = $q->row();
        $facultyID = $r->faculty_id;


        $this->db->select('*');
        $this->db->from('tbl_department');
        $this->db->where('faculty_id', trim($facultyID));
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

      public function select_departments_by_department_name($departmentName = null)
      {
      $this->db->select('*');
      $this->db->from('tbl_department');
      $this->db->where('department_name',trim($departmentName));
      $q = $this->db->get();
      $r = $q->row();
      $departmentID = $r->department_id;


      $this->db->select('*');
      $this->db->from('tbl_department');
      $this->db->where('$department_id',trim($departmentID));
      $query_result = $this->db->get();
      $result = $query_result->row();
      return $result;

      }

      public function select_all_published_teacher() {
          $this->db->select('*');
          $this->db->from('tbl_teacher');
        //  $this->db->where('department_id', $department_id);
          $query_result = $this->db->get();
          $result = $query_result->result();
          return $result;
      }

/*      public function select_teacher_info_by_teacher_id($teacher_id) {
          $this->db->select('*');
          $this->db->from('tbl_faculty');
          $this->db->where('faculty_id', $faculty_id);
          $query_result = $this->db->get();
          $result = $query_result->row();
          return $result;

      }
*/

      public function select_teachers_by_teacher_name($teacherName = null)
      {
      $this->db->select('*');
      $this->db->from('tbl_teacher');
      $this->db->where('first_name',trim($teacherName));
      $x = $this->db->get();
      $y = $x->row();
      $teacherID = $r->department_id;


      $this->db->select('*');
      $this->db->from('tbl_teacher');
      $this->db->where('$teacher_id',trim($teacherID));
      $query_result = $this->db->get();
      $result = $query_result->row();
      return $result;

      }


    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

          /***********   Event   ***********/

          public function select_all_published_event() {
              $this->db->select('*');
              $this->db->from('tbl_event');
              $this->db->where('publication_status', 1);
              $query_result = $this->db->get();
              $result = $query_result->result();
              return $result;
          }


          public function select_event_info_by_event_id($event_id) {
              $this->db->select('*');
              $this->db->from('tbl_event');
              $this->db->where('event_id', $event_id);
              $query_result = $this->db->get();
              $result = $query_result->row();
              return $result;
          }

          /***********   Event   ***********/


          /***********   Notice   ***********/

          public function select_all_published_notice() {
              $this->db->select('*');
              $this->db->from('tbl_notice');
              $this->db->where('publication_status', 1);
              $query_result = $this->db->get();
              $result = $query_result->result();
              return $result;
          }


          public function select_notice_info_by_notice_id($notice_id)
          {
              $this->db->select('*');
              $this->db->from('tbl_notice');
              $this->db->where('notice_id', $notice_id);
              $query_result = $this->db->get();
              $result = $query_result->row();
              return $result;
          }

          /***********   Notice   ***********/


          /***********   Circular   ***********/

          public function select_all_published_circular() {
              $this->db->select('*');
              $this->db->from('tbl_circular');
              $this->db->where('publication_status', 1);
              $query_result = $this->db->get();
              $result = $query_result->result();
              return $result;
          }


          public function select_circular_info_by_circular_id($circular_id) {
              $this->db->select('*');
              $this->db->from('tbl_circular');
              $this->db->where('circular_id', $circular_id);
              $query_result = $this->db->get();
              $result = $query_result->row();
              return $result;
          }

          /***********   Circular   ***********/



          /***********   News   ***********/

          public function select_all_published_news() {
              $this->db->select('*');
              $this->db->from('tbl_news');
              $this->db->where('publication_status', 1);
              $query_result = $this->db->get();
              $result = $query_result->result();
              return $result;
          }


          public function select_news_info_by_news_id($news_id) {
              $this->db->select('*');
              $this->db->from('tbl_news');
              $this->db->where('news_id', $news_id);
              $query_result = $this->db->get();
              $result = $query_result->row();
              return $result;
          }

          /***********   News   ***********/




          public function select_all_published_teacher_by_dept($department_id)
          {
              $this->db->select('*');
              $this->db->from('tbl_teacher');
              $this->db->where('department_id',$department_id);
              $query_result = $this->db->get();
              $result = $query_result->result();
              return $result;
          }

          public function select_teacher_profile_content_info_by_teacher_content_id($teacher_content_id)
          {
              $this->db->select('*');
              $this->db->from('tbl_teacher_content');
              $this->db->where('teacher_content_id',$teacher_content_id);
              $query_result = $this->db->get();
              $result = $query_result->row();
              return $result;
          }

         public function select_teacher_profile_published_content_info_by_teacher_id($teacher_id)
          {
              $this->db->select('*');
              $this->db->from('tbl_teacher_content');
              $this->db->where('teacher_id', $teacher_id);
              $query_result = $this->db->get();
              $result = $query_result->result();
              return $result;
          }



}
