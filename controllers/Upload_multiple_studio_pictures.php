<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_multiple_studio_pictures extends CI_Controller
{
	
public function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('user_id'))
      return redirect('Login');
  }

	function index()
    {
             $this->load->view('User/upload_studio_pictures');
    }

     function studio_pic_upload() {
      $user_id=$this->input->post('user_id');
      if (!empty($_FILES)) {
      
        $count = count($_FILES['userfile']['size']);

        if ($count) {
          $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value){
        for($s=0; $s<=$count-1; $s++) {
          
                $_FILES['userfile']['name']=$value['name'][$s];
                $_FILES['userfile']['type']    = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error']       = $value['error'][$s];
                $_FILES['userfile']['size']    = $value['size'][$s];
                $config['upload_path'] = 'studioPictures/';
                $config['allowed_types'] = 'gif|jpg|png';
                 $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if(!$this->upload->do_upload())
                {
                      $upload_error =  $this->upload->display_errors();
                      $this->session->set_flashdata('upload_error', $upload_error);
                      $this->session->set_flashdata('msg_class','alert-danger');
                      return redirect('Upload_multiple_studio_pictures');
                      break;          
                }
               
                $data = $this->upload->data();
                
                 
                 
                $image_path=$data['file_name'];
               
                  //Insert Pictures in catering pictures table
                $this->load->database();
           $db_data = array('studio_pictures'=>$image_path,'user_id'=>$user_id);
           
            $this->db->insert('studio_image_table',$db_data);
             
             }
         }
       }
     }
                
                
    

    return redirect('Upload_multiple_studio_pictures/photoStudio_profile');   
    
    
	}
       

        public function photoStudio_profile()
  {
    $this->load->model('Users_model','User_data');
          $user_fetch_data=$this->User_data->User_photostudio_profile_fetch_data();
         $user_fetch_image=$this->User_data->fetch_studio_Image();
         
        $this->load->view('User/photostudio_profile_header',['user_fetch_data'=>$user_fetch_data]);
         if(!empty($user_fetch_data))
          {
            
            $this->load->view('User/photostudio_users_profile',['user_fetch_data'=>$user_fetch_data,'user_fetch_image'=>$user_fetch_image]);

           
          }
  }
         
    

        
       
     

    
}				
	
	

?>