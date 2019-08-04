<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


			public function index()
			{
				$this->load->view('welcome/home');
			}
			public function registrtionForm()
			{
				$this->load->view('welcome/register');
			}
			public function Forgotpassword()
			{

				$this->load->view('welcome/forgotPassword');
			}
			public function resetLink()
			{
				$email=$this->input->post('email');
				$this->load->model('register_Model');
				$result=$this->register_Model->forgot_password($email);
				
				if(count($result)>0)
				{
					$tokan= rand(1000,9999);
					
					$this->db->query("update users password='".$tokan."'where email='".$email."'");
					$message ="Plese click on password reset link <br><a href='".base_url('reset?tokan=').$tokan."'>Reset Password</a>";
					$this->Email($email,'Reset Password Link','');
				}
				else
				{
					$this->session->set_flasdata('messege',"Email not registered");
					redirect(base_url('Welcome/Forgotpassword'));
				}
			}
			public function reset()
			{
				$tokan =$this->input->get('tokan');
				$_SESSION['tokan']= $tokan['tokan'];
				$this->load->view('welcome/resetpass');
			}
			public function updatepass()
			{
				$_SESSION['tokan'];
				$data = $this->input->post();
				if($data['password']==$data['confirmpassword'])
				{
					$this->db->query("update users set password='".$data['password']."'where password='".$_SESSION['tokan']."'");
				}
			}

			public function searchEventPlace()
			{
				$this->load->view('welcome/search_guesthouse'); 
			}
			public function searchCatering()
			{
				$this->load->view('welcome/search_catering'); 
			}
			public function searchPhotography()
			{
				$this->load->view('welcome/search_studio'); 
			}

			public function about_Us()
			{
				$this->load->view('welcome/aboutUs');
			}



			public function contactUs()
			{
				$this->load->view('welcome/contact_us');
			}

		public function contact_us_Validation()
		{
			if($this->form_validation->run('contact_us_details'))
			{
				$feedback=$this->input->post();
				$this->load->model('register_Model','rm');
				$feedback_details=$this->rm->customer_feedback($feedback);
				if($feedback_details==true)
				{
					 $this->session->set_flashdata('reg_error','Message Sent successfully. Thanks Your Feedback.');
					  $this->session->set_flashdata('user_class','alert-success');
					  $this->load->view('welcome/contact_us');


				}
				 else
					 {
			 			$this->session->set_flashdata('reg_error','User not added Plese try again!!!!');
				         $this->session->set_flashdata('user_class','alert-danger');
				         $this->load->view('welcome/contact_us');
					 }
				
			}
			
		}
}
