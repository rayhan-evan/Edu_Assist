<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $data=array();
    //    $data['all_published_category'] = $this->welcome_model->select_all_published_category();
       // $data['maincontent'] ='';

    //    $this->load->view('newEmptyPHP',$data);

    $this->load->library('session');
    }

    public function registration_teacher()
        {

                $data=array();
                $data['title']='Teacher Registration';
                $data['all_published_faculty']=$this->teacher_model->select_all_published_faculty();
                $data['maincontent']=$this->load->view('teacher/registration_teacher',$data,true);
                $this->load->view('master',$data);
        }

	public function save_teacher(){
               $data = array();
               $data['first_name'] = $this->input->post('first_name',true);
               $data['last_name'] = $this->input->post('last_name',true);
               $data['email_address'] = $this->input->post('email_address',true);
               $data['password'] = md5($this->input->post('password',true));
               $data['password_confirm'] = md5($this->input->post('password_confirm',true));
               $data['mobile_no'] = $this->input->post('mobile_no',true);
			         $data['birth_date'] = $this->input->post('year',true).'-'.$this->input->post('month',true).'-'.$this->input->post('day',true);
			         $data['gender'] = $this->input->post('gender',true);
               $data['blood_group'] = $this->input->post('blood_group',true);

               $data['faculty_id']=$this->input->post('faculty_id',true);
               $data['department_id']=$this->input->post('department_id',true);
               $data['designation'] = $this->input->post('designation',true);
               $data['additional_duty'] = $this->input->post('additional_duty',true);
               $data['joining_date'] = $this->input->post('year',true).'-'.$this->input->post('month',true).'-'.$this->input->post('day',true);

               /*
                 * Start Image Upload------------------
                 */

                $config['upload_path'] = 'images/teacher_images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '10000000';
                $config['max_width']  = '2024';
                $config['max_height']  = '1468';
                $error='';
                $fdata=array();
                $sdata = array();

				        $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('teacher_photo'))
                {
                        $sdata['message'] = $this->upload->display_errors();


                }
                else
                {
                        $fdata = $this->upload->data();
                        $data['teacher_photo']=$config['upload_path'].$fdata['file_name'];
                }

                /*
                 * End Image Upload------------
                 */

               $this->teacher_model->save_teacher_info($data);


               $sdata['message'] = "Sign Up completed successfully";
               $this->session->set_userdata($sdata);
               redirect('welcome/login');
        }

		 public function login_teacher()
        {

                $data=array();
                $data['title']='Teacher Log In';
                $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
                //$data['all_published_category']=$this->welcome_model->select_all_published_category();
                //$data['blog_info']=$this->welcome_model->select_blog_info_by_blog_id($blog_id);
                $data['maincontent']=$this->load->view('teacher/login_teacher',$data,true);
                $this->load->view('master',$data);
        }

		public function check_login_teacher()
	{
            $email_address=$this->input->post('email_address',true);
            $password=$this->input->post('password',true);

            $result=$this->teacher_model->check_teacher_login_info($email_address,$password);
            //echo '<pre>';
            //print_r($result);
            //exit();

          $sdata=array();

            if($result)
            {
               $sdata['email_address']=$result->email_address;
               $sdata['teacher_id']=$result->teacher_id;
               $this->session->set_userdata($sdata);
              redirect('teacher/teacher_profile');
			        //redirect('welcome/about');
            }
            else{
              $sdata['exception']='<h5>Invalid Email or Password !</h5>';
              $this->session->set_userdata($sdata);

              redirect('teacher/login_teacher');
            }
}


      public function teacher_logout()
        {
            $this->session->unset_userdata('first_name');
            $this->session->unset_userdata('teacher_id');
            $sdata=array();
            $sdata['message']='You are successfully Logged out !';
            $this->session->set_userdata($sdata);
            redirect('welcome','refresh');
        }



	     public function teacher_profile()
        {
                $session_data=$this->session->all_userdata();
                $teacher_id=$session_data['teacher_id'];
                $data=array();
                $data['title']='Teacher Profile';
				        $data['all_published_faculty']=$this->teacher_model->select_all_published_faculty();
                $data['all_published_news']=$this->welcome_model->select_all_published_news();
                $data['all_published_event']=$this->welcome_model->select_all_published_event();
                $data['teacher_info']=$this->teacher_model->select_teacher_info_by_teacher_id($teacher_id);
                $data['teacher_content_info']=$this->teacher_model->select_teacher_content_info_by_teacher_content_id($teacher_id);
                $data['published_teacher_content_info']=$this->teacher_model->select_published_teacher_content_info();
                $data['maincontent']=$this->load->view('teacher/teacher_profile',$data,true);
                $this->load->view('master',$data);
                 //$sdata['teacher_id']
                 //$teacher_id=$this->session->data('teacher_id');
                 //echo $teacher_id;

                // echo $session_data['teacher_id'];
        }


        public function edit_teacher($teacher_id)
        {
                $data = array();
                $data['title']='Edit Profile';
              //  $data['editor']=$this->data;
                $data['teacher_info'] = $this->teacher_model->select_teacher_info_by_teacher_id($teacher_id);
                $data['maincontent'] = $this->load->view('teacher/edit_teacher',$data,true);
                $this->load->view('master',$data);
        }
        /*   Edit Event   */

        public function update_teacher() {
          $data = array();
          $data['first_name'] = $this->input->post('first_name',true);
          $data['last_name'] = $this->input->post('last_name',true);
          $data['email_address'] = $this->input->post('email_address',true);
          $data['password'] = md5($this->input->post('password',true));
          $data['password_confirm'] = md5($this->input->post('password_confirm',true));
          $data['mobile_no'] = $this->input->post('mobile_no',true);
          $data['birth_date'] = $this->input->post('year',true).'-'.$this->input->post('month',true).'-'.$this->input->post('day',true);
          $data['gender'] = $this->input->post('gender',true);
          $data['blood_group'] = $this->input->post('blood_group',true);

          $data['faculty_id']=$this->input->post('faculty_id',true);
          $data['department_id']=$this->input->post('department_id',true);
          $data['designation'] = $this->input->post('designation',true);
          $data['additional_duty'] = $this->input->post('additional_duty',true);
          $data['joining_date'] = $this->input->post('year',true).'-'.$this->input->post('month',true).'-'.$this->input->post('day',true);

          /*
            * Start Image Upload------------------
            */

           $config['upload_path'] = 'images/teacher_images/';
           $config['allowed_types'] = 'gif|jpg|png';
           $config['max_size']	= '10000000';
           $config['max_width']  = '2024';
           $config['max_height']  = '1468';
           $error='';
           $fdata=array();
           $sdata = array();

           $this->load->library('upload', $config);

           if ( ! $this->upload->do_upload('teacher_photo'))
           {
                   $sdata['message'] = $this->upload->display_errors();


           }
           else
           {
                   $fdata = $this->upload->data();
                   $data['teacher_photo']=$config['upload_path'].$fdata['file_name'];
           }

           /*
            * End Image Upload------------
            */

            $this->teacher_model->update_teacher_info_by_teacher_id($data, $teacher_id);

            $sdata = array();
            $sdata['message'] = "Info Updated Successfully!";
            $this->session->set_userdata($sdata);
            redirect('teacher/teacher_profile');
        }



        public function upload_content($teacher_id)
        {
                $data = array();
                $data['title']='Upload Content';
              //  $data['editor']=$this->data;
                $data['all_published_faculty']=$this->teacher_model->select_all_published_faculty();
                $data['all_published_news']=$this->welcome_model->select_all_published_news();
                $data['all_published_event']=$this->welcome_model->select_all_published_event();
                $data['teacher_info'] = $this->teacher_model->select_teacher_info_by_teacher_id($teacher_id);
                $data['maincontent'] = $this->load->view('teacher/upload_content',$data,true);
                $this->load->view('master',$data);
        }

        public function save_teacher_content(){
                     $data = array();

                     /*
                       * Start Image Upload------------------
                       */

                      $config['upload_path'] = 'teacher_content/';
                      $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|txt|mp4|mp3|webm|3gp|mpeg|ppt|xlsx|flv';
                      $config['max_size']	= '10000000';
                      $config['max_width']  = '2024';
                      $config['max_height']  = '1468';
                      $error='';
                      $fdata=array();
                      $sdata = array();

      				        $this->load->library('upload', $config);

                      if ( ! $this->upload->do_upload('teacher_content'))
                      {
                              $sdata['message'] = $this->upload->display_errors();


                      }
                      else
                      {
                              $fdata = $this->upload->data();
                              $data['teacher_content']=$config['upload_path'].$fdata['file_name'];
                      }

                      /*
                       * End Image Upload------------
                       */

                     $this->teacher_model->save_teacher_content_info($data);


                     $sdata['message'] = "File uploaded successfully";
                     $this->session->set_userdata($sdata);
                     redirect('teacher/teacher_profile');
              }


        /*     Customized Function for Azax      */

        public function get_faculty()
  {
    $query=$this->db->get('tbl_faculty');
        $result= $query->result();
        $data=array();
    foreach($result as $r)
    {
      $data['value']=$r->faculty_id;
      $data['label']=$r->faculty_name;
      $json[]=$data;


    }
    echo json_encode($json);



  }

  public function get_department()
  {

      $result=$this->db->where('faculty_id',$_POST['department_id'])
            ->get('tbl_department')
            ->result();

        $data=array();
    foreach($result as $r)
    {
      $data['value']=$r->department_id;
      $data['label']=$r->department_name;
      $json[]=$data;

    }

    echo json_encode($json);

  }

        /*     Customized Function for Azax      */
}
