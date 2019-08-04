<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
	
	public function multiplefiles()
	{ 
			$data['title']='';
			//get the uploaded files and list then
			$data['uploaded_files']= directory_map('./images/');
			if($this->input->post('submit') && count($_FILES['multiplefiles']['name'] > 0 ))
			{
				//Count the number files has been Uploaded
				$number_of_files =count($_FILES['multiplefiles']['name']);

					if($number_of_files<11)
					{
						$files= $_FILES;
						
						// Make sure the folder is there
						if(!is_dir('images'))
						{
							mkdir('./images',0777,true);

						}
						// Upload files one by one
						for($i=0; $i<$number_of_files; $i++)
						{

							$_FILES['multiplefiles']['name']= $files['multiplefiles']['name'][$i];

							$_FILES['multiplefiles']['type']= $files['multiplefiles']['type'][$i];
							
							$_FILES['multiplefiles']['tmp_name']= $files['multiplefiles']['tmp_name'][$i];

							$_FILES['multiplefiles']['error']= $files['multiplefiles']['error'][$i];

							$_FILES['multiplefiles']['size']= $files['multiplefiles']['size'][$i];
						 $config['upload_path'] = 'images/';
                			$config['allowed_types'] = 'gif|jpg|png';
                			

							 $config['max_size'] ='0';
							$config['max_height']='0';
							$config['overwrite']=TRUE;
							$config['remove_spaces']=TRUE;

							$this->load->library('upload', $config);

							if(!$this->upload->do_upload('multiplefiles'))
							{
								$error = array('error'=>$this->upload->display_errors());
							}
							else
							{
								$data=array('upload_data'=>$this->upload->data());
								
								echo "success";
							}

						}
						if(!$error)
						{
							redirect('Upload/multiplefiles');
						}
					}
					 else{
						echo "Please Upload only 10 images not more than 10";
					}
			}
			else
			{
				$this->load->view('User/uploadfiles',$data);
			}

		 
	}
}

?>