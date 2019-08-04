<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_Controller extends CI_Controller 
	{
		public function comment_insert()
		{
			
			if($this->form_validation->run('comment_validation'))

			{
				 $commentors_name=trim( $this->input->post('commentors_name'));
				 $commentors_email=trim( $this->input->post('commentors_email'));
				 $commentors_feedback=trim( $this->input->post('commentors_feedback'));
				 $guesthouse_id=trim( $this->input->post('guesthouse_id'));
				 $c_date=date('Y-m-d H:i:s');
				  $data = array(
                    'commentors_name' => $commentors_name,
                    'commentors_email' => $commentors_email,
                    'commentors_feedback' =>$commentors_feedback,
                    'comments_date' => $c_date,
                    'guesthouse_id'=> $guesthouse_id,
                    
                    ); 
				 
				  $this->load->model('register_Model','rm');
				$comment=$this->rm->comment_inserted($data);

				
			}
			else{
				echo "error";
			}
				
				
			
		}
		public function fetch_comments()
		{	
			$ghouse_id = $this->input->post('guesthouse_id');
			$this->load->model('searchmodel','sm');
			$data=$this->sm->fetch_comment_data($ghouse_id);
			?>
			
			<center>
				<h1 class="text-justify text-info">Commenet List:</h1>
			<div class="table-responsive">
				<table class="table" style="background-color:white">
					
					<tbody>
						<thead  style="background-color:black">
							<thead>
					<tr>
						<th>Name List:</th>
						<th>Comments List: </th>
					</tr>
				
						<?php
						foreach($data as $data)
					{
							?>
						<tr>
							 <th style="text-transform: uppercase;font-family:Times New Roman"><b class="glyphicon glyphicon-user"style="font-size: 20px;"></b>&nbsp;&nbsp;<i><?=$data->commentors_name?></i>:</th>
							 <td style="font-family:Verdan;"><p><i><?=$data->commentors_feedback?></i>&nbsp;&nbsp;&nbsp;&nbsp;<b><?=$data->comments_date ?></b></p></td>

						</tr>
					
					<?php
					}
					?>
					</thead>
					</tbody>
				</table>
			</div>
			</center>
			

				
			<?php	
			
			
		}
	}

	?>