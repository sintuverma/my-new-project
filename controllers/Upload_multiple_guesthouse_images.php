<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_multiple_guesthouse_images extends CI_Controller
{
	
public function __construct()
  {
        parent::__construct();//this is CI_controller class function without this fuction we cant use constructor
        if(! $this->session->userdata('user_id'))
        
          return redirect('Login');
        
  }

	function index()
    {
             $this->load->view('User/upload_guest_pictures');
    }

     function doupload() {
        $user_id=$this->input->post('user_id');
        
        if (!empty($_FILES)) {
      
        $count = count($_FILES['userfile']['size']);
        if ($count) {
             foreach($_FILES as $key=>$value){
                    for($s=0; $s<=$count-1; $s++) {
                        
                            $_FILES['userfile']['name']=$value['name'][$s];
                            $_FILES['userfile']['type']    = $value['type'][$s];
                            $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                            $_FILES['userfile']['error']       = $value['error'][$s];
                            $_FILES['userfile']['size']    = $value['size'][$s];
                            $config['upload_path'] = './upload/';
                            $config['allowed_types'] = 'gif|jpg|png';
                            $this->upload->initialize($config);
                            $this->load->library('upload', $config);

                            if(!$this->upload->do_upload())
                            {
                                      $upload_error =  $this->upload->display_errors();
                                      $this->session->set_flashdata('upload_error', $upload_error);
                                      $this->session->set_flashdata('msg_class','alert-danger');
                                      return redirect('Upload_multiple_guesthouse_images');
                                      break;
                                    
                                       
                            }
                           
                            $data = $this->upload->data();
                            $image_path=$data['file_name'];
                             $this->load->database();

                        $db_data = array('guest_house_images'=>$image_path,'user_id'=>$user_id);
                       
                        $this->db->insert('guesthouse_image',$db_data);  
             }
         }
     }
                
                
    }

    return redirect('Upload_multiple_guesthouse_images/profile');
                       
           
       
         
    
}	

    public function profile(){
        $this->load->model('Users_model','User_data');
         $user_fetch_data=$this->User_data->User_Profile_fetch_data();
         $user_fetch_image=$this->User_data->fetch_guestHouse_Image();
         $prebooking_date=$this->User_data->fetchDatePicker();
       

        $this->load->view('User/guesthouse_profile_header',['user_fetch_data'=>$user_fetch_data]);
         if(!empty($user_fetch_data))
          {
            
            $this->load->view('User/guesthouse_user_profile',['user_fetch_data'=>$user_fetch_data,'user_fetch_image'=>$user_fetch_image,'prebooking_date'=>$prebooking_date]);

           
          }

    }
}			
	
	

?>