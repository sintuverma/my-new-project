<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Date_picker_controller extends CI_Controller 
	{
		public function date_picker_insert()
		{
			$data=$this->input->post();
			
			$this->load->model('register_Model','dp');
			$this->dp->multiple_date_insert($data);

			
			
			
		}



	

		public function date_picker_update()
		{
			$user_id=$this->input->post('prebooking_date_id');
			$multiple_date=$this->input->post('multiple_date');
			
			$this->load->model('register_Model','dp');
			$this->dp->multiple_date_update($user_id,$multiple_date);
			return redirect('Upload_multiple_guesthouse_images/profile');

		}	
	}

?>