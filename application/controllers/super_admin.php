<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_Admin extends CI_Controller{

    //put your code here

    public function __construct() {
        parent::__construct();
        $admin_id=$this->session->userdata('admin_id');
       if($admin_id ==NULL)
        {
            redirect('admin_login','refresh');
        }

       $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            'id' => 'ck_editor',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full",
                'width' => "100%",
                'height' => "200px"
            )
        );

    }

    public function index()
    {
       $data = array();
       $data['admin_content'] = $this->load->view('admin/admin_main_content','',TRUE);
       $data['title']='Admin Panel';

        $this->load->view('admin/admin_master',$data);
    }

    public function logout()
    {
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_id');
        $sdata=array();
        $sdata['message']='You are successfully Logged out !';
        $this->session->set_userdata($sdata);
        redirect('admin_login','refresh');
    }

    public function add_faculty()
        {

                $data=array();
                $data['title']='Add Faculty';
                $data['admin_content'] = $this->load->view('admin/add_faculty','',true);
                $this->load->view('admin/admin_master',$data);
        }

            public function save_faculty()
            {
                $data=array();
                $data['faculty_name']=$this->input->post('faculty_name',true);
                $data['publication_status']=$this->input->post('publication_status',true);

                $this->super_admin_model->save_faculty_info($data);

                $sdata=array();
                $sdata['message']="Faculty added successfully";
                $this->session->set_userdata($sdata);
                redirect('super_admin/add_faculty');
            }

            public function manage_faculty()
            {
                $data = array();
                $data['all_faculty'] = $this->super_admin_model->select_all_faculty();
                $data['title']='Manage Faculty';
                $facultyName=$this->input->get('FacultyName');
                $data['Faculty']=$facultyName;
                $data['admin_content'] = $this->load->view('admin/faculty_grid',$data,true);
                $this->load->view('admin/admin_master',$data);
            }

        public function unpublished_faculty($faculty_id)
        {
                $this->super_admin_model->unpublished_faculty_by_id($faculty_id);
                redirect('super_admin/manage_faculty');
        }

        public function published_faculty($faculty_id)
        {
                $this->super_admin_model->published_faculty_by_id($faculty_id);
                redirect('super_admin/manage_faculty');
        }


        /*     Department Info    */

        public function add_department()
        {
                $data=array();
                $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
                $data['title']='Add Department';
                $data['admin_content']=$this->load->view('admin/add_department',$data,true);
                $this->load->view('admin/admin_master',$data);
        }

        public function save_department()
        {
                $data=array();
                $data['department_name']=$this->input->post('department_name',true);
                $data['faculty_id']=$this->input->post('faculty_id',true);
                $data['publication_status']=$this->input->post('publication_status',true);
                $this->super_admin_model->save_department_info($data);
                $sdata=array();
                $sdata['message']="Department added successfully";
                $this->session->set_userdata($sdata);
                redirect('super_admin/add_department');
        }

           public function manage_department()
        {
                $data = array();
                $data['all_department'] = $this->super_admin_model->select_all_department();
                //$data['faculty_info']=$this->super_admin_model->select_faculty_info_by_faculty_id($faculty_id);
                $data['all_published_faculty']=$this->super_admin_model->select_all_published_faculty();
                $data['title']='Manage Department';
                $data['admin_content'] = $this->load->view('admin/department_grid',$data,true);

                $this->load->view('admin/admin_master',$data);
        }



        public function unpublished_department($department_id)
        {
                $this->super_admin_model->unpublished_department_by_id($department_id);
                redirect('super_admin/manage_department');
        }

        public function published_department($department_id)
        {
                $this->super_admin_model->published_department_by_id($department_id);
                redirect('super_admin/manage_department');
        }


        /*     End Department Info    */


          /***********   Event   ***********/

          /*   Add Event   */


        public function add_event()
        {
                $data=array();
                $data['editor']=$this->data;
          //      $data['all_published_category']=$this->welcome_model->select_all_published_category();
                $data['title']='Add Event';
                $data['admin_content']=$this->load->view('admin/add_event',$data,true);
                $this->load->view('admin/admin_master',$data);
        }



        public function save_event()
        {
                $data=array();
                $data['event_title']=$this->input->post('event_title',true);
                $data['event_place'] = $this->input->post('event_place',true);
                $data['event_date'] = $this->input->post('year',true).'-'.$this->input->post('month',true).'-'.$this->input->post('day',true);
                $data['event_time'] = $this->input->post('event_time',true);
                $data['event_description']=$this->input->post('event_description',true);
                $data['publication_status']=$this->input->post('publication_status',true);
                $this->super_admin_model->save_event_info($data);
                $sdata=array();
                $sdata['message']="Save Event Successfully";
                $this->session->set_userdata($sdata);
                redirect('super_admin/add_event');
        }

        /*   Add Event   */

        /*   Manage Event   */

        public function manage_event()
        {
            $data = array();
            $data['all_event'] = $this->super_admin_model->select_all_event();
            $data['title']='Manage Event';
            $data['admin_content'] = $this->load->view('admin/event_grid',$data,true);
            $this->load->view('admin/admin_master',$data);
        }


        /*   Manage Event   */

        /*   Edit Event   */


        public function edit_event($event_id)
        {
                $data = array();
                $data['title']='Edit Event';
                $data['editor']=$this->data;
                $data['event_info'] = $this->super_admin_model->select_event_info_by_id($event_id);
                $data['admin_content'] = $this->load->view('admin/edit_event',$data,true);
                $this->load->view('admin/admin_master',$data);
        }
        /*   Edit Event   */

        public function update_event() {
            $data = array();
            $event_id = $this->input->post('event_id', TRUE);
            $data['event_title']=$this->input->post('event_title',true);
            $data['event_id']=$this->input->post('event_id',true);
            $data['event_description']=$this->input->post('event_description',true);
            $data['publication_status']=$this->input->post('publication_status',true);
            $this->super_admin_model->update_event_by_id($data, $event_id);

            $sdata = array();
            $sdata['message'] = "Update Event Successfully!";
            $this->session->set_userdata($sdata);
            redirect('super_admin/manage_event');
        }


        /*   Delete Event   */

        public function delete_event($event_id)
        {
                $this->super_admin_model->delete_event_by_id($event_id);
                redirect('super_admin/manage_event');
        }

        /*   Delete Event   */

          /***********   Event   ***********/



          /***********   Notice   ***********/

          /*   Add Notice   */


        public function add_notice()
        {
                $data=array();
                $data['editor']=$this->data;
            //    $data['all_published_category']=$this->welcome_model->select_all_published_category();
                $data['title']='Add Notice';
                $data['admin_content']=$this->load->view('admin/add_notice',$data,true);
                $this->load->view('admin/admin_master',$data);
        }



        public function save_notice()
        {
                $data=array();
                $data['notice_title']=$this->input->post('notice_title',true);
                $data['notice_description']=$this->input->post('notice_description',true);
                $data['publication_status']=$this->input->post('publication_status',true);
                $this->super_admin_model->save_notice_info($data);
                $sdata=array();
                $sdata['message']="Save Notice Successfully";
                $this->session->set_userdata($sdata);
                redirect('super_admin/add_notice');
        }

        /*   Add Notice   */

        /*   Manage Notice   */

        public function manage_notice()
        {
            $data = array();
            $data['all_notice'] = $this->super_admin_model->select_all_notice();
            $data['title']='Manage Notice';
          //  $facultyName=$this->input->get('FacultyName');
          //  $data['Faculty']=$facultyName;
            $data['admin_content'] = $this->load->view('admin/notice_grid',$data,true);
            $this->load->view('admin/admin_master',$data);
        }


        /*   Manage Notice   */

        /*   Edit Notice   */


        public function edit_notice($notice_id)
        {
                $data = array();
                $data['title']='Edit Notice';
                $data['editor']=$this->data;
                $data['notice_info'] = $this->super_admin_model->select_notice_info_by_id($notice_id);
                $data['admin_content'] = $this->load->view('admin/edit_notice',$data,true);
                $this->load->view('admin/admin_master',$data);
        }
        /*   Edit Notice   */

        public function update_notice() {
            $data = array();
            $notice_id = $this->input->post('notice_id', TRUE);
            $data['notice_title']=$this->input->post('notice_title',true);
            $data['notice_id']=$this->input->post('notice_id',true);
            $data['notice_description']=$this->input->post('notice_long_description',true);
            $data['publication_status']=$this->input->post('publication_status',true);
            $this->super_admin_model->update_notice_by_id($data, $notice_id);

            $sdata = array();
            $sdata['message'] = "Update Notice Successfully!";
            $this->session->set_userdata($sdata);
            redirect('super_admin/manage_notice');
        }


        /*   Delete Notice   */

        public function delete_notice($notice_id)
        {
                $this->super_admin_model->delete_notice_by_id($notice_id);
                redirect('super_admin/manage_notice');
        }

        /*   Delete Notice   */

          /***********   Notice   ***********/


          /***********   Circular   ***********/

          /*   Add Circular   */


        public function add_circular()
        {
                $data=array();
                $data['editor']=$this->data;
                $data['all_published_category']=$this->welcome_model->select_all_published_category();
                $data['title']='Add Circular';
                $data['admin_content']=$this->load->view('admin/add_circular',$data,true);
                $this->load->view('admin/admin_master',$data);
        }



        public function save_circular()
        {
                $data=array();
                $data['circular_title']=$this->input->post('circular_title',true);
                $data['application_deadline'] = $this->input->post('year',true).'-'.$this->input->post('month',true).'-'.$this->input->post('day',true);
                $data['circular_description']=$this->input->post('circular_description',true);
                $data['publication_status']=$this->input->post('publication_status',true);
                $this->super_admin_model->save_circular_info($data);
                $sdata=array();
                $sdata['message']="Save Circular Successfully";
                $this->session->set_userdata($sdata);
                redirect('super_admin/add_circular');
        }

        /*   Add Circular   */

        /*   Manage Circular   */

        public function manage_circular()
        {
            $data = array();
            $data['all_circular'] = $this->super_admin_model->select_all_circular();
            $data['title']='Manage Circular';
          //  $facultyName=$this->input->get('FacultyName');
          //  $data['Faculty']=$facultyName;
            $data['admin_content'] = $this->load->view('admin/circular_grid',$data,true);
            $this->load->view('admin/admin_master',$data);
        }


        /*   Manage Circular   */

        /*   Edit Circular   */


        public function edit_circular($circular_id)
        {
                $data = array();
                $data['title']='Edit Circular';
                $data['editor']=$this->data;
                $data['circular_info'] = $this->super_admin_model->select_circular_info_by_id($circular_id);
                $data['admin_content'] = $this->load->view('admin/edit_circular',$data,true);
                $this->load->view('admin/admin_master',$data);
        }
        /*   Edit Circular   */

        public function update_circular() {
            $data = array();
            $circular_id = $this->input->post('circular_id', TRUE);
            $data['circular_title']=$this->input->post('circular_title',true);
            $data['circular_id']=$this->input->post('circular_id',true);
            $data['application_deadline'] = $this->input->post('year',true).'-'.$this->input->post('month',true).'-'.$this->input->post('day',true);
            $data['circular_description']=$this->input->post('circular_description',true);
            $data['publication_status']=$this->input->post('publication_status',true);
            $this->super_admin_model->update_circular_by_id($data, $circular_id);

            $sdata = array();
            $sdata['message'] = "Update Circular Successfully!";
            $this->session->set_userdata($sdata);
            redirect('super_admin/manage_circular');
        }


        /*   Delete Circular   */

        public function delete_circular($circular_id)
        {
                $this->super_admin_model->delete_circular_by_id($circular_id);
                redirect('super_admin/manage_circular');
        }

        /*   Delete Circular   */

          /***********   Circular   ***********/


          /***********   News   ***********/

          /*   Add News   */


        public function add_news()
        {
                $data=array();
                $data['editor']=$this->data;
                $data['all_published_category']=$this->welcome_model->select_all_published_category();
                $data['title']='Add News';
                $data['admin_content']=$this->load->view('admin/add_news',$data,true);
                $this->load->view('admin/admin_master',$data);
        }



        public function save_news()
        {
                $data=array();
                $data['news_title']=$this->input->post('news_title',true);
            //    $data['category_id']=$this->input->post('category_id',true);
                $data['news_short_description']=$this->input->post('news_short_description',true);
                $data['news_long_description']=$this->input->post('news_long_description',true);
                $data['publication_status']=$this->input->post('publication_status',true);
                $this->super_admin_model->save_news_info($data);
                $sdata=array();
                $sdata['message']="Save News Successfully";
                $this->session->set_userdata($sdata);
                redirect('super_admin/add_news');
        }

        /*   Add News   */

        /*   Manage News   */

        public function manage_news()
        {
            $data = array();
            $data['all_news'] = $this->super_admin_model->select_all_news();
            $data['title']='Manage News';
          //  $facultyName=$this->input->get('FacultyName');
          //  $data['Faculty']=$facultyName;
            $data['admin_content'] = $this->load->view('admin/news_grid',$data,true);
            $this->load->view('admin/admin_master',$data);
        }


        /*   Manage News   */

        /*   Edit News   */


        public function edit_news($news_id)
        {
                $data = array();
                $data['title']='Edit News';
                $data['editor']=$this->data;
                $data['news_info'] = $this->super_admin_model->select_news_info_by_id($news_id);
                $data['admin_content'] = $this->load->view('admin/edit_news',$data,true);
                $this->load->view('admin/admin_master',$data);
        }
        /*   Edit News   */

        public function update_news() {
            $data = array();
            $news_id = $this->input->post('news_id', TRUE);

            $data['news_title']=$this->input->post('news_title',true);
            $data['news_id']=$this->input->post('news_id',true);
            $data['news_short_description']=$this->input->post('news_short_description',true);
            $data['news_long_description']=$this->input->post('news_long_description',true);
            $data['publication_status']=$this->input->post('publication_status',true);
            $this->super_admin_model->update_news_by_id($data, $news_id);

            $sdata = array();
            $sdata['message'] = "Update News Successfully!";
            $this->session->set_userdata($sdata);
            redirect('super_admin/manage_news');
        }


        public function unpublished_news($news_id)
        {
                $this->super_admin_model->unpublished_news_by_id($news_id);
                redirect('super_admin/manage_news');
        }

        public function published_news($news_id)
        {
                $this->super_admin_model->published_news_by_id($news_id);
                redirect('super_admin/manage_news');
        }


        /*   Delete News   */

        public function delete_news($news_id)
        {
                $this->super_admin_model->delete_news_by_id($news_id);
                redirect('super_admin/manage_news');
        }

        /*   Delete News   */


          /***********   News   ***********/

}
