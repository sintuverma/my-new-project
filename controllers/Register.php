<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
	
	public function registerValidation()
	{

		if($this->form_validation->run('is_user_register')){
                    
					$username=$this->input->post('username');
					$mobile=$this->input->post('mobile_number');
					$email=$this->input->post('email');
					$password=$this->input->post('password');
					$created_at=$this->input->post('created_at');
					
					
					$this->load->model('register_Model','rm');
					$user_reg = $this->rm->add_user($username,$mobile,$email,$password,$created_at);
				
					 if($user_reg==true)
					 {
					 	 $this->session->set_flashdata('reg_error','Registration successfully. Please Login here.');
					 	 $this->session->set_flashdata('user_class','alert-success');
					 	

					 	  //$this->session->set_userdata(['id'=>$user_reg->id,'username'=>$user_reg->username]);
					 	 //
					 	
					 }
					 else
					 {
			 			$this->session->set_flashdata('reg_error','User not added Plese try again!!!!');
				         $this->session->set_flashdata('user_class','alert-danger');
				         $this->load->view('welcome/register');
					 }

					
					
			}

	  

			
	}
	
			
		}
	


?>