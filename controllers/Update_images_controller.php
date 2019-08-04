<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_images_controller extends CI_Controller{

	public function delete_guesthouse_images($id)
	{
		 // $this->db->where('gh_image_id', $id);

   //              unlink(base_url("uploads/".$group_picture));

   //              $this->db->delete('guesthouse_image', array('gh_image_id' =>$id));
	  if( $this->db->where('gh_image_id',$id)->update('guesthouse_image',['STATUS'=>0]))
	  {
	  		$this->session->set_flashdata('msg',' Delete  successfully');
			$this->session->set_flashdata('msg_class','alert-success');
			$this->load->model('Users_model');

					$userid=$this->session->userdata('user_id');
					$user_fetch_data=$this->Users_model->User_Profile_fetch_data($userid);
					$data=$this->Users_model->fetch_guestHouse_Image($userid);

					$this->load->view('User/Update_guestHouse_images',['user_fetch_data'=>$user_fetch_data,'profile'=>$data]);
	  }
	
	}
	public function delete_catering_pictures($imageid)
	{
		if( $this->db->delete('catering_pictures_table',['catering_image_id'=>$imageid]))
	  {
	  		$this->session->set_flashdata('msg',' Delete  successfully');
			$this->session->set_flashdata('msg_class','alert-success');
			$this->load->model('Users_model');

					$userid=$this->session->userdata('user_id');
					$user_fetch_data=$this->Users_model->User_catering_profile_fetch_data($userid);
					$data=$this->Users_model->fetch_catering_Image($userid);

					$this->load->view('User/Update_catering_images',['user_fetch_data'=>$user_fetch_data,'profile'=>$data]);
	  }
	
	}
	public function delete_photostudio_pictures($imageid)
	{
		if( $this->db->delete('studio_image_table',['studio_image_id'=>$imageid]))
	  {
	  		$this->session->set_flashdata('msg',' Delete  successfully');
			$this->session->set_flashdata('msg_class','alert-success');
			$this->load->model('Users_model');

					$userid=$this->session->userdata('user_id');
					$user_fetch_data=$this->Users_model->User_photostudio_profile_fetch_data($userid);
					$data=$this->Users_model->fetch_studio_Image($userid);

					$this->load->view('User/Update_photostudio_images',['user_fetch_data'=>$user_fetch_data,'profile'=>$data]);
	  }
	}
	
}
?>