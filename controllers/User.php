<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function Forgotpassword()
		{
			$this->load->view('welcome/forgotPassword');
		}
	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('user_id'))
			return redirect('Login');
	}

		public function dashboard(){
			
			$this->load->view('User/dashboard');
		}

		public function logout(){
			//Remove session
			$this->session->unset_userdata('user_id','username','password');
			//Remove Cookie
			setcookie('username','',0 , "/");
			setcookie('password','',0 , "/");
			return redirect('Login');

		}


		public function fetch_country(){
			$this->load->model('Users_model','um');
			$result = $this->um->fetchCountry();
			if (!empty($result)) {
				echo json_encode($result);
			}else{
				echo json_encode('err');
			}
		}
		public function fetch_state(){
			$this->load->model('Users_model','um');
			$country = $this->input->post('country');
			$result = $this->um->fetchState($country);
			if (!empty($result)) {
				echo json_encode($result);
			}else{
				echo json_encode('err');
			}
		}

		public function fetch_city(){
			$this->load->model('Users_model','um');
			$state = $this->input->post('state');
			$result = $this->um->fetchCity($state);
			if (!empty($result)) {
				echo json_encode($result);
			}else{
				echo json_encode('err');
			}
		}

		 


		public function guestHouseDetail(){
			
			 $target_dir = "profile_pictures_folder/guestProfile_pic/";
                    $target_file = $target_dir . time().basename($_FILES["guest_profile_pic"]["name"]);
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $imgName = time().basename($_FILES["guest_profile_pic"]["name"]);
                    move_uploaded_file($_FILES["guest_profile_pic"]["tmp_name"], $target_file);
         $data = array (
                    'guesthouse_name'=>$_POST['guesthouse_name'],
                    'guesthouse_address'=>$_POST['guesthouse_address'],
                    'guesthouse_area'=>$_POST['guesthouse_area'],
                    'guesthouse_pincode'=>  ($_POST['guesthouse_pincode']),
                    'country'=>$_POST['country'],
                    'guesthouse_state'=>$_POST['guesthouse_state'],
                    'guesthouse_city'=>$_POST['guesthouse_city'],
                    'guesthouse_official_site'=>$_POST['guesthouse_official_site'],
                    'guesthouse_facility'=>$_POST['guesthouse_facility'],
                    'user_id'=>$_POST['user_id'],
                    'guest_profile_pic'=>$imgName
                    );
			if($this->form_validation->run('validate_guesthouse_details') && $target_file!='')
			{
				$this->load->model('register_Model','g_insert');
				$insert=$this->g_insert->guesthouse_Data_insert($data);
				
				if($insert>0)
				{
					
					return redirect('Upload_multiple_guesthouse_images');
					
				}
				else
				{
					echo "Not Success Full";
				}



			}
			else{
				echo "its not valid";
			}
		
		}


		public function catering_details()
		{ 
			
			 $target_dir = "profile_pictures_folder/catering_profile_pic/";
                    $target_file = $target_dir . time().basename($_FILES["catering_profile_pic"]["name"]);

                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $imgName = time().basename($_FILES["catering_profile_pic"]["name"]);
                    move_uploaded_file($_FILES["catering_profile_pic"]["tmp_name"], $target_file);
                    $data  = array (
                    'catering_name'=>$_POST['catering_name'],
                    'caterers_address'=>$_POST['caterers_address'],
                    'caterers_area'=>$_POST['caterers_area'],
                    'caterers_pincode'=>  ($_POST['caterers_pincode']),
                    'country'=>$_POST['country'],
                    'caterers_state'=>$_POST['caterers_state'],
                    'caterers_city'=>$_POST['caterers_city'],
                    'caterers_services'=>$_POST['caterers_services'],
                    'user_id'=>$_POST['user_id'],
                    'catering_profile_pic'=>$imgName
                    );

			if($this->form_validation->run('validate_caterers_details') && $target_file!='')
			{
				$this->load->model('register_Model','rm');
				$insert=$this->rm->catering_Data_insert($data);
				if($insert>0)
					{

					return redirect('Upload_multiple_catering_pictures');
					
					}
				else{
					echo "Not Success Full";
					}
			}
			else{
					echo "Form Not valid";
				}
		}



		public function studio_details()
		{
				$target_dir = "profile_pictures_folder/studio_profile_pic/";
                    $target_file = $target_dir . time().basename($_FILES["studio_profile_pic"]["name"]);

                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $imgName = time().basename($_FILES["studio_profile_pic"]["name"]);
                    move_uploaded_file($_FILES["studio_profile_pic"]["tmp_name"], $target_file);
                    $data  = array (
                    'studio_name'=>$_POST['studio_name'],
                    'studio_address'=>$_POST['studio_address'],
                    'studio_area'=>$_POST['studio_area'],
                    'studio_pincode'=>  ($_POST['studio_pincode']),
                    'country'=>$_POST['country'],
                    'studio_state'=>$_POST['studio_state'],
                    'studio_city'=>$_POST['studio_city'],
                    'studio_services'=>$_POST['studio_services'],
                    'user_id'=>$_POST['user_id'],
                    'studio_profile_pic'=>$imgName
                    );
			
			if($this->form_validation->run('validate_studio_form_details') && $target_file!='')
			{
				$this->load->model('register_Model','rm');
				$insert=$this->rm->studio_Data_insert($data);
				if($insert>0)
					{
						echo "success";

					return redirect('Upload_multiple_studio_pictures');
					
					}
				else{
					echo "Not Success Full";
					}
			}
			else{
				echo "error";
			}
		}

		
	
}



?>