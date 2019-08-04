<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_Profile_Pictures extends CI_Controller 
{
	public function update_guesthouse_profile_picture()
	{
		$userid=$this->input->post('guesthouse_id');


		 $target_dir = "profile_pictures_folder/guestProfile_pic/";
                    $target_file = $target_dir . time().basename($_FILES["guest_profile_pic"]["name"]);
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $imgName = time().basename($_FILES["guest_profile_pic"]["name"]);
                    move_uploaded_file($_FILES["guest_profile_pic"]["tmp_name"], $target_file);
         $data = array (
                    
                    'guest_profile_pic'=>$imgName
                    );
         
			if($target_file!='')
			{
				$this->load->model('register_Model','update_pic');
				$update_pic=$this->update_pic->gueshouse_update_profile_pic($data,$userid);
 				return redirect('Upload_multiple_guesthouse_images/profile');
			}
			else{
				echo "its not valid";
			}
		}
	}
		
