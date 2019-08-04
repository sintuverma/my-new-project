<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->model('Users_model');
		if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
		{
			
			if($this->Users_model->isValidate($_COOKIE['username'],$_COOKIE['password']))
			{
					$this->session->set_userdata(['user_id'=>$user_details->user_id,'username'=>$user_details->username]);
					return redirect('User/dashboard');
			}

		}
		$this->load->view('welcome/login');
	}

		public function loginController(){

			if($this->form_validation->run('is_user_validate')){
					$email = $this->input->post('email');
					$password = $this->input->post('password');
					$remember= $this->input->post('remember');
					$this->load->model('Users_model'); 


					$this->load->model('Users_model');
					$user_details = $this->Users_model->isValidate($email,$password);
					
					if($user_details->user_id){
						$this->session->set_userdata(['user_id'=>$user_details->user_id,'username'=>$user_details->username]);
						if($remember!=NULL)
						{
							setcookie('username',$username,time() + (86400*30),"/");
							setcookie('password',$password,time() + (86400*30),"/");
						}
							$ghouse_table = $this->Users_model->check_user_in_guesthouse_table($user_details->user_id);

							$ghouse_img = $this->Users_model->check_user_in_image_table($user_details->user_id);
							// print_r($ghouse_img);

							// print_r($ghouse_table);
							// exit;

							if (!empty($ghouse_table) && !empty($ghouse_img) ) {
								return redirect('Upload_multiple_guesthouse_images/profile');
								
							}else if(!empty($ghouse_table) && empty($ghouse_img)){
								return redirect('Upload_multiple_guesthouse_images'); 

							}else{

								return redirect('User/dashboard');   //redirect the Admin controller Welcome met

							}
						
					}else{
						$this->session->set_flashdata('msg','Invalid E-mail/Password');
						return redirect('Login');
					}
			}else{
				$this->load->view('welcome/login');

			}
				
			
		}
}


?>