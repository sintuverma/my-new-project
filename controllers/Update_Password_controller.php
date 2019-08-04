<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_Password_controller extends CI_Controller{
	function index()
	{	$this->load->model('Users_model','User_data');
         $user_fetch_data=$this->User_data->User_Profile_fetch_data();
		$this->load->view('User/change_password',['user_fetch_data'=>$user_fetch_data]);
	}
	
	function updatePwd()
	{
		
			if($this->form_validation->run('update_password_validation'))
			{
				$curr_password =$this->input->post('password');
				$new_password =$this->input->post('newpass');
				$conf_password =$this->input->post('confpassword');
				$this->load->model('Users_model');
				$userid=$this->session->userdata('user_id');
				$passwd=$this->Users_model->getCurrPassword($userid);

						if($passwd->password==$curr_password)
						{
							if($new_password==$conf_password)	
							{
								if($this->Users_model->updatePassword($new_password,$userid)==true)
								{
									$this->session->set_flashdata('reg_error','Password Updated Success Fully');
									$this->session->set_flashdata('user_class','alert-success');
									 return redirect('Update_Password_controller');
								}
								else
								{
									// $this->session->set_flashdata('msg','Password Updation Failed');
									// $this->session->set_flashdata('msg_class','alert-danger');
								}


							}
							else
							{
								echo 'New Password and Confirm Password is not matching';
							}
						}
						else{
									$this->session->set_flashdata('reg_error','Password Updation Failed');
									$this->session->set_flashdata('user_class','alert-danger');
									return redirect('Update_Password_controller');
							}
			}

			else{
				$this->session->set_flashdata('reg_error','Password Updation Failed');
									$this->session->set_flashdata('user_class','alert-danger');
									//$this->load->view('User/change_password');
			
				return redirect('Update_Password_controller');
			}
		
		
	}

	/*
	*
	*
	Catering Password Header Section Start
	*
	*
	*/
	public function update_catering_password(){
		$this->load->model('Users_model','User_data');
         $user_fetch_data=$this->User_data->User_catering_profile_fetch_data();
		$this->load->view('User/change_password_catering',['user_fetch_data'=>$user_fetch_data]);
	}

	public function update_catering_password_data()
	{
		
			if($this->form_validation->run('update_password_validation'))
			{
				$curr_password =$this->input->post('password');
				$new_password =$this->input->post('newpass');
				$conf_password =$this->input->post('confpassword');
				$this->load->model('Users_model');
				$userid=$this->session->userdata('user_id');
				$passwd=$this->Users_model->getCurrPassword($userid);

						if($passwd->password==$curr_password)
						{
							if($new_password==$conf_password)	
							{
								if($this->Users_model->updatePassword($new_password,$userid)==true)
								{
									$this->session->set_flashdata('reg_error','Password Updated Success Fully');
									$this->session->set_flashdata('user_class','alert-success');
									 return redirect('Update_Password_controller/update_catering_password');
								}
								else
								{
									// $this->session->set_flashdata('msg','Password Updation Failed');
									// $this->session->set_flashdata('msg_class','alert-danger');
								}


							}
							else
							{
								echo 'New Password and Confirm Password is not matching';
							}
						}
						else{
									$this->session->set_flashdata('reg_error','Password Updation Failed');
									$this->session->set_flashdata('user_class','alert-danger');
									return redirect('Update_Password_controller/update_catering_password');
							}
			}

			else{
				$this->session->set_flashdata('reg_error','Password Updation Failed');
									$this->session->set_flashdata('user_class','alert-danger');
									//$this->load->view('User/change_password_catering');
			
				return redirect('Update_Password_controller/update_catering_password');
			}
		
		
	}


	public function update_photostudio_password()
	{
		$this->load->model('Users_model','User_data');
         $user_fetch_data=$this->User_data->User_photostudio_profile_fetch_data();
		$this->load->view('User/change_password_photostudio',['user_fetch_data'=>$user_fetch_data]);
	}
	
	public  function update_photostudio_password_data()
	{
		if($this->form_validation->run('update_password_validation'))
			{
				$curr_password =$this->input->post('password');
				$new_password =$this->input->post('newpass');
				$conf_password =$this->input->post('confpassword');
				$this->load->model('Users_model');
				$userid=$this->session->userdata('user_id');
				$passwd=$this->Users_model->getCurrPassword($userid);

						if($passwd->password==$curr_password)
						{
							if($new_password==$conf_password)	
							{
								if($this->Users_model->updatePassword($new_password,$userid)==true)
								{
									$this->session->set_flashdata('reg_error','Password Updated Success Fully');
									$this->session->set_flashdata('user_class','alert-success');
									 return redirect('Update_Password_controller/update_photostudio_password');
								}
								else
								{
									// $this->session->set_flashdata('msg','Password Updation Failed');
									// $this->session->set_flashdata('msg_class','alert-danger');
								}


							}
							else
							{
								echo 'New Password and Confirm Password is not matching';
							}
						}
						else{
									$this->session->set_flashdata('reg_error','Password Updation Failed');
									$this->session->set_flashdata('user_class','alert-danger');
									return redirect('Update_Password_controller/update_photostudio_password');
							}
			}

			else{
				$this->session->set_flashdata('reg_error','Password Updation Failed');
									$this->session->set_flashdata('user_class','alert-danger');
									//$this->load->view('User/change_password_catering');
			
				return redirect('Update_Password_controller/update_photostudio_password');
			}
		
		
	}
}

?>