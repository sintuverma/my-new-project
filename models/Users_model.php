<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Users_model extends CI_Model {
/*
*
<========================Users Or Registration Updation Section Start =========================>
*
*/

    public function update_reg_profile($userid,$username,$mobile,$email,$updated_at)
			{
				 return $this->db->where('user_id',$userid)
                 ->update('users',['username'=>$username,'mobile_number'=>$mobile,'email'=>$email,'updated_at'=>$updated_at]);
			}

/*
*
<========================Users Or Registration Updation Section End =========================>
*
*/

/*
*
<========================Password Updation Section Start =========================>
*
*/

		public function isValidate($email,$password){
					$q = $this->db->where(['email'=>$email,'password'=>$password])
								  ->get('users');
					if($q->num_rows()){
						return $q->row();

					}else
						return false;
			}
	 public function getCurrPassword($user_id)
	 {
	 	$query= $this->db->where(['user_id'=>$user_id])
	 					->get('users');
	 					if($query->num_rows()>0)
	 					{
	 						return $query->row();
	 					}
	 }
	 public function updatePassword($new_password,$userid)
	{
		$data = array('password'=>$new_password);
		return $this->db->where('user_id',$userid)
						->update('users',$data);
	}
/*
*
<========================Password Updation Section  End =========================>
*
*/

			public function fetch_reg_data($userid)
			{
				$q = $this->db->select('user_id,username,mobile_number,email ')
						  ->from('users')
						  ->where('user_id',$userid)
						  ->get();
						  return $q->result();
			}

			
/*
*
<======================== Guest House CREATE READ AND UPDATE  Section Start =========================>
*
*/
			public function User_Profile_fetch_data()
			{
				$id = $this->session->userdata('user_id');
				$q= $this->db->select()
 		            ->from('guest_house_table')
 		            ->join('users','guest_house_table.guesthouse_id = users.user_id')
 		            ->where('guest_house_table.user_id',$id)
 		            ->get();
 		            return $q->result();         

			}
			public function fetch_display_page($g_id)
			{
					
				$q = $this->db->select()
				            ->from('guest_house_table')
				            ->join('users','guest_house_table.guesthouse_id = users.user_id')
				            ->where('guesthouse_id',$g_id)
				            ->get();
				            return $q->result();

			}
			public function fetch_guestHouse_display_Image($g_id)
			{
				
				$q = $this->db->select()
				->from('guesthouse_image')
				->where('user_id',$g_id)
				->limit(10)
				->get();
				return $q->result();
			}

			

			public function fetch_guestHouse_Image()
			{
				$id=$this->session->userdata('user_id');
				$q = $this->db->select()
				->from('guesthouse_image')
				->where('user_id',$id)
				->where('STATUS',1)
				->limit(10)
				->get();
				return $q->result();
			}

			

			public function update_guesthouse_profile($g_id, Array $array)
		    {

		       return $this->db->where('guesthouse_id',$g_id)
		                 	   ->update('guest_house_table',$array);
		    }


			    public function fetchDatePicker()
			    {
					$id = $this->session->userdata('user_id');
					$q = $this->db->select()->from('prebooking_date_table')
								->where('user_id',$id)
								->get()->result();
					return $q;
				}
/*
*
<========================Guest House Create Read and Update Section End =========================>
*
*/

/*
*
<========================Fetch Country, State && Cities From Database Section Start======================>
*
*/

    public function fetchCountry(){
		$q = 	$q=$this->db->distinct()
		  				->select('CITY_COUNTRY')
		  				->order_by('CITY_COUNTRY',"ASC")
		  				->get('cities');
		 return $q->result();
    }

	public function fetchState($country){
		  	$q=$this->db->distinct()
		  				->select('CITY_STATE')
		  				->where('CITY_COUNTRY',$country)
		  				->order_by('CITY_STATE',"ASC")
		  				->get('cities');
		  	return $q->result();
	  	}

  	  public function fetchCity($state){
	  	$q = $this->db->select('CITY_NAME')
	  			->where('CITY_STATE',$state)
	  			->order_by('CITY_NAME','asc')
	  			->get('cities');

	  	return $q->result();
	  }
/*
*
<========================Fetch Country, State && Cities From Database Section End======================>
*
*/


/*
*
<========================Catering Services CREATE READ AND UPDATE Section Start======================>
*
*/

	  public function User_catering_profile_fetch_data()
			{
				$id = $this->session->userdata('user_id');
				$q= $this->db->select()
 		            ->from('catering_details_table')
 		            ->join('users','catering_details_table.caterers_id= users.user_id')
 		            ->where('catering_details_table.user_id',$id)
 		            ->get();
 		            return $q->result();         

			}

			public function display_catering_profile($c_id)
			{
				$q = $this->db->select()
				            ->from('catering_details_table')
				            ->join('users','catering_details_table.caterers_id = users.user_id')
				            ->where('caterers_id',$c_id)
				            ->get();
				            return $q->result();
			}
				public function fetch_catering_displya_Image($c_id)
			{
				
				$q = $this->db->select()
				->from('catering_pictures_table')
				->where('user_id',$c_id)
				->limit(10)
				->get();
				return $q->result();
			}
			
			

				public function fetch_catering_Image()
			{
				$id=$this->session->userdata('user_id');
				$q = $this->db->select()
				->from('catering_pictures_table')
				->where('user_id',$id)
				->limit(10)
				->get();
				return $q->result();
			}

				public function update_catering_profile($catering_id, Array $array)
				{
					 return $this->db->where('caterers_id',$catering_id)
			                 		 ->update('catering_details_table',$array);
				}



			

/*
*
<======================== Photo Sutio Services CREATE READ AND UPDATE Section Start======================>
*
*/
			public function User_photostudio_profile_fetch_data()
			{
				$id = $this->session->userdata('user_id');
				$q= $this->db->select()
 		            ->from('photostudio_detail_table')
 		            ->join('users','photostudio_detail_table.studio_id= users.user_id')
 		           
 		            ->where('photostudio_detail_table.user_id',$id)
 		            ->get();
 		            return $q->result();  
			}

			public function display_studio_profile($s_id)
			{
				$q= $this->db->select()
 		            ->from('photostudio_detail_table')
 		            ->join('users','photostudio_detail_table.studio_id= users.user_id')
 		             
 		            ->where('photostudio_detail_table.user_id',$s_id)
 		            ->get();
 		            return $q->result();
			}
				public function fetch_studio_Image()
			{
				$id=$this->session->userdata('user_id');
				$q = $this->db->select()
				->from('studio_image_table')
				->where('user_id',$id)
				->limit(10)
				->get();
				return $q->result();
			}
				public function fetch_studio_Image_display($id)
			{
				
				$q = $this->db->select()
				->from('studio_image_table')
				->where('user_id',$id)
				->limit(10)
				->get();
				return $q->result();
			}
			public function update_photostudio_profile($studio_id, Array $array)
				{
					 return $this->db->where('studio_id',$studio_id)
			                 		 ->update('photostudio_detail_table',$array);
				}

	
			 
			public function check_user_in_guesthouse_table($user_id){
				$q = $this->db->select()->from('guest_house_table')->where('user_id',$user_id)->get()->row();
				return $q;
			}

			public function check_user_in_image_table($user_id){
				$q = $this->db->select()->from('guesthouse_image')->where('user_id',$user_id)->get()->result();
				return $q;

			}
	


			


	}

?>