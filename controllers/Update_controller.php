<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_controller extends CI_Controller{

public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_id'))
			return redirect('Login');
	}

	/*
	* 
	==============Guest House Prfiles Update Section=======================
	*/


			public function edit_reg_account($user_id)
			{
				$this->load->model('Users_model');
				$user_fetch_data=$this->Users_model->fetch_reg_data($user_id);
				$this->load->view('User/Update_registration',['user_fetch_data'=>$user_fetch_data]);	
				
			}
			

			public function edit_guest_house_data($user_id)
				{
					$this->load->model('Users_model');

					$user_fetch_data=$this->Users_model->User_Profile_fetch_data($user_id);
					
					$this->load->view('User/Update_guesthouse_profile',['user_fetch_data'=>$user_fetch_data]);
				}
				public function edit_images_data($user_id)
				{
					$this->load->model('Users_model');
					$user_fetch_data=$this->Users_model->User_Profile_fetch_data($user_id);
					$data=$this->Users_model->fetch_guestHouse_Image($user_id);

					$this->load->view('User/Update_guestHouse_images',['user_fetch_data'=>$user_fetch_data,'profile'=>$data]);

				}

				public function update_reg_data($user_id)
				{
					if($this->form_validation->run('is_user_update'))
					{
							$username=$this->input->post('username');
							$mobile=$this->input->post('mobile_number');
							$email=$this->input->post('email');
							$updated_at=$this->input->post('updated_at');

						$this->load->model('Users_model','editUpdate');
					if($this->editUpdate->update_reg_profile($user_id,$username,$mobile,$email,$updated_at))
						{
								$this->session->set_flashdata('msg','Your Data is Updated  successfully');
								$this->session->set_flashdata('msg_class','alert-success');
									$this->load->model('Users_model');
									$user_fetch_data=$this->Users_model->fetch_reg_data($user_id);
									$this->load->view('User/Update_registration',['user_fetch_data'=>$user_fetch_data]);
						}
						


					}
					
				}

				// Update Event Place Data or Guest House Data
				public function update_guesthouse_data($g_id)
				{
						if($this->form_validation->run('validate_guesthouse_details'))
					{
						$post = $this->input->post();//get value from Guest House  form in $post variable


							$this->load->model('Users_model','editUpdate');
						if($this->editUpdate->update_guesthouse_profile($g_id,$post))
						{
							$this->session->set_flashdata('msg','Your Data is Updated  successfully');
						$this->session->set_flashdata('msg_class','alert-success');
						$this->load->model('Users_model');

						$userid=$this->session->userdata('user_id');
					$user_fetch_data=$this->Users_model->User_Profile_fetch_data($userid);
					
					$this->load->view('User/Update_guesthouse_profile',['user_fetch_data'=>$user_fetch_data]);
						}
					
						else
						{ 
							
							$this->session->set_flashdata('msg','Your Data is not Update Plese try again!!!!');
						  $this->session->set_flashdata('msg_class','alert-danger');
						}
					}
				}

				

/*
	* 
	==============Catering Profiles Update Section=======================
	*/

		public function edit_catering_profile_data($userid)
		{
			
				$this->load->model('Users_model');

				$user_fetch_data=$this->Users_model->User_catering_profile_fetch_data($userid);
				
				$this->load->view('User/Update_catering_profile',['user_fetch_data'=>$user_fetch_data]);
				

		}
		public function update_catering_profile_data($g_id)
				{
						if($this->form_validation->run('validate_caterers_details'))
					{
						$post = $this->input->post();//get value from Guest House  form in $post variable


							$this->load->model('Users_model','editUpdate');
						if($this->editUpdate->update_catering_profile($g_id,$post))
						{
							$this->session->set_flashdata('msg','Your Data is Updated  successfully');
						$this->session->set_flashdata('msg_class','alert-success');
						$this->load->model('Users_model');

						$userid=$this->session->userdata('user_id');
					$user_fetch_data=$this->Users_model->User_catering_profile_fetch_data($userid);
					
					$this->load->view('User/Update_catering_profile',['user_fetch_data'=>$user_fetch_data]);
						}
					
						else
						{ 
							
							$this->session->set_flashdata('msg','Your Data is not Update Plese try again!!!!');
						  $this->session->set_flashdata('msg_class','alert-danger');
						}
					}
				}
		
			 public function edit_reg_account_catering($user_id)
			{
				$this->load->model('Users_model');
				$user_fetch_data=$this->Users_model->fetch_reg_data($user_id);
				$this->load->view('User/Update_registration_catering',['user_fetch_data'=>$user_fetch_data]);	
				
			}

			public function update_reg_catering_data($user_id)
				{
					if($this->form_validation->run('is_user_update'))
					{
							$username=$this->input->post('username');
							$mobile=$this->input->post('mobile_number');
							$email=$this->input->post('email');
							$updated_at=$this->input->post('updated_at');

						$this->load->model('Users_model','editUpdate');
					if($this->editUpdate->update_reg_profile($user_id,$username,$mobile,$email,$updated_at))
						{
								$this->session->set_flashdata('msg','Your Data is Updated  successfully');
								$this->session->set_flashdata('msg_class','alert-success');
									$this->load->model('Users_model');
									$user_fetch_data=$this->Users_model->fetch_reg_data($user_id);
									$this->load->view('User/Update_registration_catering',['user_fetch_data'=>$user_fetch_data]);
						}
						


					}
					
				}
				public function edit_catering_images($user_id)
				{
					$this->load->model('Users_model');
					$user_fetch_data=$this->Users_model->User_catering_profile_fetch_data($user_id);
					$data=$this->Users_model->fetch_catering_Image($user_id);

					$this->load->view('User/Update_catering_images',['user_fetch_data'=>$user_fetch_data,'profile'=>$data]);

				}

				public function edit_photostudio_profile_data($userid)
		{
			
				$this->load->model('Users_model');

				$user_fetch_data=$this->Users_model->User_photostudio_profile_fetch_data($userid);
				
				$this->load->view('User/Update_photostudio_profile',['user_fetch_data'=>$user_fetch_data]);
				

		}
		 public function edit_reg_account_photostudio($user_id)
			{
				$this->load->model('Users_model');
				$user_fetch_data=$this->Users_model->fetch_reg_data($user_id);
				$this->load->view('User/Update_registration_photostudio',['user_fetch_data'=>$user_fetch_data]);	
				
			}


			public function	update_photostudio_profile_data($s_id)
			{
						if($this->form_validation->run('validate_studio_form_details'))
					{
						$post = $this->input->post();//get value from Guest House  form in $post variable


							$this->load->model('Users_model','editUpdate');
						if($this->editUpdate->update_photostudio_profile($s_id,$post))
						{
							$this->session->set_flashdata('msg','Your Data is Updated  successfully');
							$this->session->set_flashdata('msg_class','alert-success');
							$this->load->model('Users_model');

								$userid=$this->session->userdata('user_id');
								$user_fetch_data=$this->Users_model->User_photostudio_profile_fetch_data($userid);
					
								$this->load->view('User/Update_photostudio_profile',['user_fetch_data'=>$user_fetch_data]);
						}
					
						else
						{ 
							
							$this->session->set_flashdata('msg','Your Data is not Update Plese try again!!!!');
						  $this->session->set_flashdata('msg_class','alert-danger');
						  return redirect('Update_controller/edit_photostudio_profile_data');
						}
					}
				}


				public function update_reg_phtostudio_data($user_id)
				{
					if($this->form_validation->run('is_user_update'))
					{
							$username=$this->input->post('username');
							$mobile=$this->input->post('mobile_number');
							$email=$this->input->post('email');
							$updated_at=$this->input->post('updated_at');

						$this->load->model('Users_model','editUpdate');
					if($this->editUpdate->update_reg_profile($user_id,$username,$mobile,$email,$updated_at))
						{
								$this->session->set_flashdata('msg','Your Data is Updated  successfully');
								$this->session->set_flashdata('msg_class','alert-success');
									$this->load->model('Users_model');
									$user_fetch_data=$this->Users_model->fetch_reg_data($user_id);
									$this->load->view('User/Update_registration_photostudio',['user_fetch_data'=>$user_fetch_data]);
						}
						


					}
					
				}
				public function edit_photostudio_images($user_id)
				{
					$this->load->model('Users_model');
					$user_fetch_data=$this->Users_model->User_photostudio_profile_fetch_data($user_id);
					$data=$this->Users_model->fetch_studio_Image($user_id);

					$this->load->view('User/Update_photostudio_images',['user_fetch_data'=>$user_fetch_data,'profile'=>$data]);

				}
				
		

}
?>

