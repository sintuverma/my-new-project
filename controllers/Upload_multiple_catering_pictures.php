<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_multiple_catering_pictures extends CI_Controller{
	public function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('user_id'))
      return redirect('Login');
  }
  function index()
    {
             $this->load->view('User/upload_catering_pictures');
    }
    function doneupload() {
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
                $config['upload_path'] = 'cateringPictures/';
                $config['allowed_types'] = 'gif|jpg|png';
                 $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if(!$this->upload->do_upload())
                {
                      $upload_error =  $this->upload->display_errors();
                      $this->session->set_flashdata('upload_error', $upload_error);
                      $this->session->set_flashdata('msg_class','alert-danger');
                      return redirect('Upload_multiple_catering_pictures');
                      break;          
                }
               
                $data = $this->upload->data();
                
                 
                 
                $image_path=$data['file_name'];
               
                  //Insert Pictures in catering pictures table
                $this->load->database();
            $db_data = array('catering_Pictures'=>$image_path,'user_id'=>$user_id);
           
           $this->db->insert('catering_pictures_table',$db_data); 


             
             }
         }
       }
     }
                
                
    

    return redirect('Upload_multiple_catering_pictures/catering_profile');
                       
           
        
        
    
	}
        
         
    
  public function catering_profile()
  {
    $this->load->model('Users_model','User_data');
          $user_fetch_data=$this->User_data->User_catering_profile_fetch_data();
         $user_fetch_image=$this->User_data->fetch_catering_Image();
         
        $this->load->view('User/catering_profile_header',['user_fetch_data'=>$user_fetch_data]);
         if(!empty($user_fetch_data))
          {
            
            $this->load->view('User/catering_user_profiles',['user_fetch_data'=>$user_fetch_data,'user_fetch_image'=>$user_fetch_image]);

           
          }
  }
           

         
         
       //      $this->load->model('Users_model','User_data');
         
       //    // //$user_fetch_image=$this->User_data->fetch_guestHouse_Image();
       //    if($user_fetch_data==true)
       //    {
            
       //       $this->load->view('User/catering_user_profiles',['user_fetch_data'=>$user_fetch_data]);

           
       //    }
       
         
       // }

     
}
?>
