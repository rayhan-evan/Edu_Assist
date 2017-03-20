<?php
//session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //must be written in every controller for preventing injection

class Admin_Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id=$this->session->userdata('admin_id');
        if($admin_id !=NULL)
        {
            redirect('super_admin','refresh');
        }
    }  

    public function index()
	{
		$this->load->view('admin/login');  
                
	}
        
        public function check_login()
	{
            $admin_email_address=$this->input->post('admin_email_address',true);
            $admin_password=$this->input->post('admin_password',true);
            //echo $admin_email_address.'------'.$admin_password;
            //exit();
            $result=$this->admin_login_model->check_login_info($admin_email_address,$admin_password);
            //echo '<pre>';
            //print_r($result);
            //exit();
            
          $sdata=array(); 
            
            if($result)
            {
               $sdata['admin_name']=$result->admin_name;
               $sdata['admin_id']=$result->admin_id;
               $this->session->set_userdata($sdata);
              redirect('super_admin');
            }   
            else{
              $sdata['exception']='<h5>Invalid Email or Password !</h5>';
              $this->session->set_userdata($sdata);
              
              redirect('admin_login');
            }
        
            
       
	}

}