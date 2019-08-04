<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Search extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('searchmodel');

    }


    function search_keyword()
    {
        $keyword=$this->input->post('search');
        $data = $this->searchmodel->search_Records($keyword);
       if (!empty($data)) {
          echo json_encode($data);
       }else{
        echo json_encode('err');
         
       }
      
        

    }
     function display_profile($g_id)
       {
         $this->load->model('Users_model');
         $data=$this->Users_model->fetch_display_page($g_id);
         $image=$this->Users_model->fetch_guestHouse_display_Image($g_id);
         $this->load->view('Welcome/Display_Profile',['profile'=>$data,'image'=>$image]);
       }

        function search_catering_keyword()
    {
        $keyword=$this->input->post('search');
        $data = $this->searchmodel->search_catering_record($keyword);
       if (!empty($data)) {
          echo json_encode($data);
       }else{
        echo json_encode('err');
         
       }
      
        

    }
     function display_catering_profile($c_id)
       {
         $this->load->model('Users_model');
         $data=$this->Users_model->display_catering_profile($c_id);
         $image=$this->Users_model->fetch_catering_displya_Image($c_id);
         $this->load->view('welcome/Display_Catering_Profile',['profile'=>$data,'image'=>$image]);
       }


        function search_studio_keyword()
    {
        $keyword=$this->input->post('search');
        $data = $this->searchmodel->search_studio_record($keyword);
       if (!empty($data)) {
          echo json_encode($data);
       }else{
        echo json_encode('err');
         // $this->db->last_query();
       }
      
        //$this->load->view('user/view', $data);

    }
     function display_studio_profile($s_id)
       {
         $this->load->model('Users_model');
         $data=$this->Users_model->display_studio_profile($s_id);
         $image=$this->Users_model->fetch_studio_Image_display($s_id);
        
         $this->load->view('welcome/Display_Studio_Profile',['profile'=>$data,'image'=>$image]);
       }

}

?>