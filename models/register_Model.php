<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_Model extends CI_Model {

/*
*
<========================Users Registration Insert Section Start======================>
*
*/
	public function add_user($username,$mobile,$email,$password,$created_at)
	{
		return $this->db->insert('users',['username'=>$username,'mobile_number'=>$mobile,'email'=>$email,'password'=>$password,'created_at'=>$created_at]);

	}
/*
*
<========================Users Registration Insert Section End ======================>
*
*/

/*
*
<======================= Customer Feedback Or Contact Us Insert Section Start ======================>
*
*/
	public function customer_feedback($array)
	{
		return $this->db->insert('contact_us_table',$array);
	}
/*
*
<======================= Customer Feedback Or Contact Us Insert Section End ======================>
*
*/

/*
*
<=======================Guest House Details Insert Section Start ======================>
*
*/
	public function guesthouse_Data_insert($array)
			{
				return $this->db->insert('guest_house_table',$array);
				
			}

	public function gueshouse_update_profile_pic($data,$userid)

{
    $this->db->where('guesthouse_id',$userid);       
    $this->db->update('guest_house_table',$data);
}
/*
*
<=======================Guest House Details Insert Section End ======================>
*
*/

/*
*
<======================= Multiple Date  Insert Section Start======================>
*
*/

			public function multiple_date_insert($array)
			{
				return $this->db->insert('prebooking_date_table',$array);
			}

			public function multiple_date_update($userid,$data)
			{
				 return $this->db->where('prebooking_date_id',$userid)
				 ->update('prebooking_date_table',['multiple_date'=>$data]);
			}
/*
*
<======================= Multiple Date  Insert Section End ======================>
*
*/

/*
*
<=======================Catering Services Details  Insert Section Start ======================>
*
*/			
			public function catering_Data_insert($array)
			{
				return $this->db->insert('catering_details_table',$array);
			}
/*
*
<=======================Catering Services Details  Insert Section End ======================>
*
*/

/*
*
<=======================Photo Stuid Details  Insert Section Start ======================>
*
*/	
			public function studio_Data_insert($array)
			{
				return $this->db->insert('photostudio_detail_table',$array);
			}


/*
*
<=======================Photo Stuid Details  Insert Section End ======================>
*
*/	
		public function comment_inserted($array)
		{
			return $this->db->insert('comment_table',$array);
		}
		public function forgot_password($email)
		{
			$q=$this->db->select('*')
					 ->from('users')
					 ->where('email',$email)
					 ->get();
					 return $q->result();
		}
		
}


?>