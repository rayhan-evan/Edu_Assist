<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {

	function __construct()

	 {

			 parent::__construct();

			 $this->load->helper('form');

			 $this->load->helper('url');

	 }

    public function registration_student()
        {

                $data=array();
                $data['title']='Student Registration';
		            $data['all_published_faculty']=$this->student_model->select_all_published_faculty();
                //$data['blog_info']=$this->welcome_model->select_blog_info_by_blog_id($blog_id);
                $data['maincontent']=$this->load->view('student/registration_student',$data,true);
                $this->load->view('master',$data);
        }

        public function save_student(){
               $data = array();
               $data['first_name'] = $this->input->post('first_name',true);
               $data['last_name'] = $this->input->post('last_name',true);
               $data['email_address'] = $this->input->post('email_address',true);
               $data['password'] = md5($this->input->post('password',true));
               $data['password_confirm'] = md5($this->input->post('password_confirm',true));
               $data['mobile_no'] = $this->input->post('mobile_no',true);
      			   $data['id_no'] = $this->input->post('id_no',true);
      			   $data['reg_no'] = $this->input->post('reg_no',true);

      			   $data['faculty_id']=$this->input->post('faculty_id',true);
      			   $data['birth_date'] = $this->input->post('year',true).'-'.$this->input->post('month',true).'-'.$this->input->post('day',true);
      			   $data['gender'] = $this->input->post('gender',true);
               $data['blood_group'] = $this->input->post('blood_group',true);


               /*
                 * Start Image Upload------------------
                 */
								 $config['upload_path'] = 'images/student_images/';
								 $config['allowed_types'] = 'gif|jpg|png';
								 $config['max_size']	= '10000000';
								 $config['max_width']  = '2024';
								 $config['max_height']  = '1468';
								 $error='';
								 $fdata=array();
								 $sdata = array();

								 $this->load->library('upload', $config);

								 if ( ! $this->upload->do_upload('student_photo'))
								 {
												 $sdata['message'] = $this->upload->display_errors();


								 }
								 else
								 {
												 $fdata = $this->upload->data();
												 $data['student_photo']=$config['upload_path'].$fdata['file_name'];
								 }

                /*
                 * End Image Upload------------
                 */

               $this->student_model->save_student_info($data);


               $sdata['message'] = "Sign Up completed successfully";
               $this->session->set_userdata($sdata);
               redirect('welcome/login');
        }

        public function login_student()
        {

                $data=array();
                $data['title']='Student Log In';
                //$data['all_published_category']=$this->welcome_model->select_all_published_category();
                //$data['blog_info']=$this->welcome_model->select_blog_info_by_blog_id($blog_id);
                $data['maincontent']=$this->load->view('student/login_student',$data,true);
                $this->load->view('master',$data);
        }

				public function check_login_student()
			{
								$email_address=$this->input->post('email_address',true);
								$password=$this->input->post('password',true);

								$result=$this->student_model->check_student_login_info($email_address,$password);
								//echo '<pre>';
								//print_r($result);
								//exit();

							$sdata=array();

								if($result)
								{
									 $sdata['email_address']=$result->email_address;
									 $sdata['student_id']=$result->student_id;
									 $this->session->set_userdata($sdata);
									redirect('student/student_profile');
									//redirect('welcome/about');
								}
								else{
									$sdata['exception']='<h5>Invalid Email or Password !</h5>';
									$this->session->set_userdata($sdata);

									redirect('student/login_student');
								}
		}

		public function student_logout()
	    {
	        $this->session->unset_userdata('first_name');
	        $this->session->unset_userdata('student_id');
	        $sdata=array();
	        $sdata['message']='You are successfully Logged out !';
	        $this->session->set_userdata($sdata);
	        redirect('welcome','refresh');
	    }

			public function student_profile()
			 {
							 $session_data=$this->session->all_userdata();
							 $student_id=$session_data['student_id'];
							 $data=array();
							 $data['title']='Student Profile';
							 $data['all_published_faculty']=$this->student_model->select_all_published_faculty();
							 $data['all_published_news']=$this->welcome_model->select_all_published_news();
							 $data['all_published_event']=$this->welcome_model->select_all_published_event();
							 $data['student_info']=$this->student_model->select_student_info_by_student_id($student_id);
							 $data['maincontent']=$this->load->view('student/student_profile',$data,true);
							 $this->load->view('master',$data);
								//$sdata['teacher_id']
								//$teacher_id=$this->session->data('teacher_id');
								//echo $teacher_id;

							 // echo $session_data['teacher_id'];
			 }


			 public function edit_student($student_id)
			 {
							 $data = array();
							 $data['title']='Edit Profile';
						 //  $data['editor']=$this->data;
							 $data['student_info'] = $this->student_model->select_student_info_by_student_id($student_id);
							 $data['maincontent'] = $this->load->view('student/edit_student',$data,true);
							 $this->load->view('master',$data);
			 }
			 /*   Edit Event   */

			 public function update_student() {
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

					$config['upload_path'] = 'images/student_images/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '10000000';
					$config['max_width']  = '2024';
					$config['max_height']  = '1468';
					$error='';
					$fdata=array();
					$sdata = array();

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('student_photo'))
					{
									$sdata['message'] = $this->upload->display_errors();


					}
					else
					{
									$fdata = $this->upload->data();
									$data['student_photo']=$config['upload_path'].$fdata['file_name'];
					}

					/*
					 * End Image Upload------------
					 */

					 $this->student_model->update_student_info_by_student_id($data, $student_id);

					 $sdata = array();
					 $sdata['message'] = "Info Updated Successfully!";
					 $this->session->set_userdata($sdata);
					 redirect('student/student_profile');
			 }
}
