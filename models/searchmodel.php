<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Searchmodel extends CI_Model
{

    public function __construct() {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->like('username',$keyword);
        $query  =   $this->db->get('guest_house_table');
        return $query->result_array();
    }

  public function search_Records($data){
	  		$q = $this->db->select('*')
				 ->from ('guest_house_table')
				 ->join('users','guest_house_table.guesthouse_id = users.user_id')
 		         ->join('guesthouse_image','guest_house_table.guesthouse_id = guesthouse_image.gh_image_id')
				 ->like('guesthouse_name',$data)
				 ->or_like('guesthouse_address',$data)
				 ->or_like('guesthouse_area',$data)
				 ->or_like('guesthouse_pincode',$data)
				 ->or_like('guesthouse_city',$data)
				 ->get();
		return $q->result();


	  }

	  //Search Catering Model
	   function search_catering_keyword($keyword)
    {
        $this->db->like('username',$keyword);
        $query  = $this->db->get('catering_details_table');
        return $query->result_array();
    }

  public function search_catering_record($data){
	  		$q = $this->db->select('*')
				 ->from ('catering_details_table')
				 ->join('users','catering_details_table.caterers_id = users.user_id')
 		         ->join('catering_pictures_table','catering_details_table.caterers_id = catering_pictures_table.catering_image_id')
				 ->like('catering_name',$data)
				 ->or_like('caterers_address',$data)
				 ->or_like('caterers_area',$data)
				 ->or_like('caterers_pincode',$data)
				 ->or_like('caterers_city',$data)
				 ->get();
		return $q->result();


	  }

	  //Search Photostudio Model
	    function search_studio_keyword($keyword)
    {
        $this->db->like('username',$keyword);
        $query  =   $this->db->get('photostudio_detail_table');
        return $query->result_array();
    }

  public function search_studio_record($data){
	  		$q = $this->db->select('*')
				 ->from ('photostudio_detail_table')
				 ->join('users','photostudio_detail_table.studio_id = users.user_id')
 		         ->join('studio_image_table','photostudio_detail_table.studio_id = studio_image_table.	studio_image_id')
				 ->like('studio_name',$data)
				 ->or_like('studio_address',$data)
				 ->or_like('studio_area',$data)
				 ->or_like('studio_pincode',$data)
				 ->or_like('studio_city',$data)
				 ->get();
		return $q->result();


	  }
	  public function fetch_comment_data($ghouse_id)
	  {
	  	$q=$this->db->select('*')
	  				->from('comment_table')
	  				->order_by('comment_id', 'DESC')
	  				->where('guesthouse_id',$ghouse_id)
	  				->limit(10)
	  				->get();
	  				return $q->result();
	  }

}