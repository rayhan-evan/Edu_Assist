<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {




	public function index()
	{
		/* $this->load->view('welcome_message');  */

                $data=array();
                $data['title']='Home';
                $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
                $data['all_published_news']=$this->welcome_model->select_all_published_news();
						//		$data['all_latest_news']=$this->welcome_model->select_all_latest_news();
					//			$this->welcome_model->update_counter($news_id);
                //$data['sidebar_menu']=1;
                $data['maincontent']=$this->load->view('home_content',$data,true);
                $this->load->view('master',$data);
	}

        public function faculty()
	{
                $data=array();
                $data['title']='';
                $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
                $data['all_published_department']=$this->welcome_model->select_all_published_department();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();

                $data['maincontent']=$this->load->view('faculty',$data,true);
                $this->load->view('master',$data);
	}

	public function facultyNew()
	{
                $data=array();
                $data['title']='';
                $facultyName=$this->input->get('FacultyName');
                $data['Faculty']=$facultyName;
                $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
                $data['all_published_department']=$this->welcome_model->select_departments($facultyName);
								$data['all_published_news']=$this->welcome_model->select_all_published_news();

                $data['maincontent']=$this->load->view('faculty',$data,true);
                $this->load->view('master',$data);
	}


        public function department()
	{
                $data=array();
                $data['title']='';
                $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
                $data['all_published_department']=$this->welcome_model->select_all_published_department();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();

                $data['maincontent']=$this->load->view('department',$data,true);
                $this->load->view('master',$data);
	}

	public function departmentNew($department_id)
	{
                $data=array();
                $data['title']='';
                $data['Department']=$this->welcome_model->select_dept_by_dept_id($department_id);
                $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();
                $data['maincontent']=$this->load->view('department',$data,true);
                $this->load->view('master',$data);
	}

        public function communities()
	{
                $data=array();
                $data['title']='Communities';
								$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
								$data['all_published_department']=$this->welcome_model->select_all_published_department();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();
								$data['all_published_notice']=$this->welcome_model->select_all_published_notice();
                $data['maincontent']=$this->load->view('communities',$data,true);
								$this->load->view('master',$data);
	}


        public function about()
	{
                $data=array();
                $data['title']='About';
                $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();
                $data['maincontent']=$this->load->view('about','',true);
                $this->load->view('master',$data);
	}

        public function contact()
	{
                $data=array();
                $data['title']='Contact';
                $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();
                $data['maincontent']=$this->load->view('contact','',true);
								$this->load->view('master',$data);
	}

        public function login()
	{
                $data=array();
                $data['title']='Login';
								$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();
                $data['maincontent']=$this->load->view('login','',true);
								$this->load->view('master',$data);
	}

            public function login_teacher()
            {
                $data=array();
                $data['title']='Login as Teacher';
								$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();
                $data['maincontent']=$this->load->view('login_teacher','',true);
								$this->load->view('master',$data);
            }

            public function check_login_teacher()
            {

                redirect('teacher_profile');
            }

            public function login_student()
            {
                $data=array();
                $data['title']='Login as Student';
								$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();
                $data['maincontent']=$this->load->view('login_student','',true);
								$this->load->view('master',$data);
            }

        public function registration()
	{
                $data=array();
                $data['title']='Registration';
								$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();
                $data['maincontent']=$this->load->view('registration','',true);
								$this->load->view('master',$data);
	}

            public function registration_teacher()
            {
                $data=array();
                $data['title']='Register as Teacher';
								$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
								$data['all_published_news']=$this->welcome_model->select_all_published_news();
                $data['maincontent']=$this->load->view('registration_teacher','',true);
								$this->load->view('master',$data);
            }

            public function registration_student()
            {
                $data=array();
                $data['title']='Register as Student';
                $data['maincontent']=$this->load->view('registration_student','',true);
								$data['all_published_news']=$this->welcome_model->select_all_published_news();
								$this->load->view('master',$data);
            }



						public function events()
			{
		                $data=array();
		                $data['title']='Events';
		                $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
		                $data['all_published_department']=$this->welcome_model->select_all_published_department();
										$data['all_published_news']=$this->welcome_model->select_all_published_news();
										$data['all_published_event']=$this->welcome_model->select_all_published_event();

		                $data['maincontent']=$this->load->view('events',$data,true);
		                $this->load->view('master',$data);
			}


						public function event_details()
			{
										$event_id=$this->input->get('event_id');

										$data = array();
										$data['title']='Event Details';
										$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
										$data['event_info'] = $this->welcome_model->select_event_info_by_event_id($event_id);
										$data['all_published_news']=$this->welcome_model->select_all_published_news();
										$data['all_published_event']=$this->welcome_model->select_all_published_event();
										$data['maincontent'] = $this->load->view('event_details', $data, TRUE);
										$this->load->view('master', $data);
			}

						public function notice()
			{
										$data=array();
										$data['title']='Notice';
										$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
										$data['all_published_news']=$this->welcome_model->select_all_published_news();
										$data['all_published_notice']=$this->welcome_model->select_all_published_notice();
										$data['maincontent']=$this->load->view('notice',$data,true);
										$this->load->view('master',$data);
			}

						public function notice_details($notice_id)
			{
										$data = array();
										$data['title']='Notice Details';
										$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
										$data['notice_info'] = $this->welcome_model->select_notice_info_by_notice_id($notice_id);
										$data['all_published_news']=$this->welcome_model->select_all_published_news();
										$data['all_published_notice']=$this->welcome_model->select_all_published_notice();
										$data['maincontent'] = $this->load->view('notice_details', $data, TRUE);
										$this->load->view('master', $data);
			}

						public function circular()
			{
										$data=array();
										$data['title']='Circular';
										$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
										$data['all_published_news']=$this->welcome_model->select_all_published_news();
										$data['all_published_circular']=$this->welcome_model->select_all_published_circular();
										$data['maincontent']=$this->load->view('circular',$data,true);
										$this->load->view('master',$data);
			}

						public function circular_details($circular_id)
			{
										$data = array();
										$data['title']='Circular Details';
										$data['circular_info'] = $this->welcome_model->select_circular_info_by_circular_id($circular_id);
										$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
										$data['all_published_department']=$this->welcome_model->select_all_published_department();
										$data['all_published_news']=$this->welcome_model->select_all_published_news();
										$data['all_published_circular']=$this->welcome_model->select_all_published_circular();
										$data['maincontent'] = $this->load->view('circular_details', $data, TRUE);
										$this->load->view('master', $data);
			}

						public function news_details($news_id)
				{
										$data = array();
										$data['title']='News Details';
										$data['news_info'] = $this->welcome_model->select_news_info_by_news_id($news_id);
										$data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
										$data['all_published_department']=$this->welcome_model->select_all_published_department();
										$data['all_published_news']=$this->welcome_model->select_all_published_news();
										$data['maincontent'] = $this->load->view('news_details', $data, TRUE);
										$this->load->view('master', $data);
				}


				public function teacher_list($department_id)
         {
					 $data=array();
					 $data['title']='';
					 $data['all_published_faculty']=$this->welcome_model->select_all_published_faculty();
					 $data['Department']=$this->welcome_model->select_dept_by_dept_id($department_id);
					 $data['all_published_department']=$this->welcome_model->select_all_published_department();
					 $data['all_published_news']=$this->welcome_model->select_all_published_news();
					 $data['all_published_teacher']=$this->welcome_model->select_all_published_teacher_by_dept($department_id);
					 $data['maincontent']=$this->load->view('teacher_list',$data,true);
					 $this->load->view('master',$data);
         }

				public function view_teacher_profile($teacher_id)
         {
            //     $session_data=$this->session->all_userdata();
            //     $teacher_id=$session_data['teacher_id'];
                 $data=array();
                 $data['title']='Teacher Profile';
 				         $data['all_published_faculty']=$this->teacher_model->select_all_published_faculty();
                 $data['all_published_news']=$this->welcome_model->select_all_published_news();
                 $data['all_published_event']=$this->welcome_model->select_all_published_event();
                 $data['teacher_info']=$this->teacher_model->select_teacher_info_by_teacher_id($teacher_id);
            //     $data['teacher_content_info']=$this->welcome_model->select_teacher_profile_content_info_by_teacher_content_id($teacher_content_id);
                 $data['published_teacher_content_info']=$this->welcome_model->select_teacher_profile_published_content_info_by_teacher_id($teacher_id);
                 $data['maincontent']=$this->load->view('view_teacher_profile',$data,true);
                 $this->load->view('master',$data);
                  //$sdata['teacher_id']
                  //$teacher_id=$this->session->data('teacher_id');
                  //echo $teacher_id;

                 // echo $session_data['teacher_id'];
         }
}
?>
