<?php

class Super_Admin_Model extends CI_Model{


    /*     Faculty Info    */

    public function save_faculty_info($data)
    {
       $this->db->insert('tbl_faculty',$data);

    }

    public function select_all_faculty()
    {
        $this->db->select('*');
        $this->db->from('tbl_faculty');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }


    public function unpublished_faculty_by_id($faculty_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('faculty_id',$faculty_id);
        $this->db->update('tbl_faculty');

    }

    public function published_faculty_by_id($faculty_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('faculty_id',$faculty_id);
        $this->db->update('tbl_faculty');

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

    public function select_faculty_info_by_faculty_id($faculty_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_faculty');
        $this->db->where('faculty_id',$faculty_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }




    /*     End Faculty Info    */



    /*     Department Info    */

    public function save_department_info($data)
    {
        $this->db->insert('tbl_department',$data);

    }

    public function select_all_department()
    {
        $this->db->select('*');
        $this->db->from('tbl_department');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }


    public function unpublished_department_by_id($department_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('department_id',$department_id);
        $this->db->update('tbl_department');

    }

    public function published_department_by_id($department_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('department_id',$department_id);
        $this->db->update('tbl_department');

    }





    /*     End Department Info    */


    public function save_category_info($data)
    {
        $this->db->insert('tbl_category',$data);

    }

        public function select_all_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function unpublished_category_by_id($category_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');

    }

    public function published_category_by_id($category_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');

    }

        public function save_blog_info($data)
    {
        $this->db->insert('tbl_blog',$data);
    }


            /*   Event  */

        public function save_event_info($data)
        {
        $this->db->insert('tbl_event',$data);
        }

        public function select_all_event()
        {
        $this->db->select('*');
        $this->db->from('tbl_event');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

        }


        public function unpublished_event_by_id($event_id)
        {
        $this->db->set('publication_status',0);
        $this->db->where('event_id',$event_id);
        $this->db->update('tbl_event');

        }

        public function published_event_by_id($event_id)
        {
        $this->db->set('publication_status',1);
        $this->db->where('event_id',$event_id);
        $this->db->update('tbl_event');

        }

        public function select_all_published_event()
        {
        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
        }

        public function select_event_info_by_id($event_id)
        {
        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->where('event_id',$event_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

        }

        public function update_event_by_id($data, $event_id)
        {
        $this->db->where('event_id', $event_id);
        $this->db->update('tbl_event', $data);
        }

        public function delete_event_by_id($event_id)
        {
        $this->db->where('event_id',$event_id);
        $this->db->delete('tbl_event');

        }

          /*   Event  */

          /*   Notice  */

      public function save_notice_info($data)
      {
      $this->db->insert('tbl_notice',$data);
      }

      public function select_all_notice()
      {
      $this->db->select('*');
      $this->db->from('tbl_notice');
      $query_result = $this->db->get();
      $result = $query_result->result();
      return $result;

      }


      public function unpublished_notice_by_id($notice_id)
      {
      $this->db->set('publication_status',0);
      $this->db->where('notice_id',$notice_id);
      $this->db->update('tbl_notice');

      }

      public function published_notice_by_id($notice_id)
      {
      $this->db->set('publication_status',1);
      $this->db->where('notice_id',$notice_id);
      $this->db->update('tbl_notice');

      }

      public function select_all_published_notice()
      {
      $this->db->select('*');
      $this->db->from('tbl_notice');
      $this->db->where('publication_status',1);
      $query_result = $this->db->get();
      $result = $query_result->result();
      return $result;
      }

      public function select_notice_info_by_id($notice_id)
      {
      $this->db->select('*');
      $this->db->from('tbl_notice');
      $this->db->where('notice_id',$notice_id);
      $query_result = $this->db->get();
      $result = $query_result->row();
      return $result;

      }

      public function update_notice_by_id($data, $notice_id)
      {
      $this->db->where('notice_id', $notice_id);
      $this->db->update('tbl_notice', $data);
      }

      public function delete_notice_by_id($notice_id)
      {
      $this->db->where('notice_id',$notice_id);
      $this->db->delete('tbl_notice');

      }

        /*   Notice  */



        /*   Circular  */

    public function save_circular_info($data)
    {
    $this->db->insert('tbl_circular',$data);
    }

    public function select_all_circular()
    {
    $this->db->select('*');
    $this->db->from('tbl_circular');
    $query_result = $this->db->get();
    $result = $query_result->result();
    return $result;

    }


    public function unpublished_circular_by_id($circular_id)
    {
    $this->db->set('publication_status',0);
    $this->db->where('circular_id',$circular_id);
    $this->db->update('tbl_circular');

    }

    public function published_circular_by_id($circular_id)
    {
    $this->db->set('publication_status',1);
    $this->db->where('circular_id',$circular_id);
    $this->db->update('tbl_circular');

    }

    public function select_all_published_circular()
    {
    $this->db->select('*');
    $this->db->from('tbl_circular');
    $this->db->where('publication_status',1);
    $query_result = $this->db->get();
    $result = $query_result->result();
    return $result;
    }

    public function select_circular_info_by_id($circular_id)
    {
    $this->db->select('*');
    $this->db->from('tbl_circular');
    $this->db->where('circular_id',$circular_id);
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;

    }

    public function update_circular_by_id($data, $circular_id)
    {
    $this->db->where('circular_id', $circular_id);
    $this->db->update('tbl_circular', $data);
    }

    public function delete_circular_by_id($circular_id)
    {
    $this->db->where('circular_id',$circular_id);
    $this->db->delete('tbl_circular');

    }

      /*   Circular  */





            /*   News  */

    public function save_news_info($data)
    {
    $this->db->insert('tbl_news',$data);
    }

    public function select_all_news()
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }


    public function unpublished_news_by_id($news_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('news_id',$news_id);
        $this->db->update('tbl_news');

    }

    public function published_news_by_id($news_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('news_id',$news_id);
        $this->db->update('tbl_news');

    }

    public function select_all_published_news()
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_news_info_by_id($news_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id',$news_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;

    }

    public function update_news_by_id($data, $news_id)
    {
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news', $data);
    }

    public function delete_news_by_id($news_id)
    {
        $this->db->where('news_id',$news_id);
        $this->db->delete('tbl_news');

    }

          /*   News  */
}
