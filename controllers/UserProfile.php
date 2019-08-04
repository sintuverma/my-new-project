<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserProfile extends CI_Controller
{
	public function user_profile()
	{
		$this->load->view("User/guesthouse_user_profile");
	}

//controller part

	public function delete()
{

$ownerNames = $this->input->post('item');

foreach ($ownerNames as $ownerName => $k) {

 //echo "Array : " . $k . "<br/>";

$photo = $this->wallpaper_model->del_photo($k);

if ($photo->num_rows() > 0)
    {
        $row = $photo->row();

        $file_photo = $row->wall;

        echo "$file_name</br>";
        $path_file = 'image/wallpaper/';

        unlink($path_file.$file_photo);
    }

  $this->wallpaper_model->drop_photo($k);

  redirect('admin/wallpaper','refresh');
}
}
//model part


function del_photo($k)
            {
                $this->db->where('id_wall',$k);
                $query = $getData = $this->db->get('tabel_wall');
                        if($getData->num_rows() > 0)
                            return $query;
                        else
                            return null;
            }
  function drop_photo($k)
            {
            $this->db->where('id_wall',$k);
            $this->db->delete('tabel_wall');
            }


}
?>