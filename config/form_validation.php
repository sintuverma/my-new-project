<?php 

	$config =[
				'is_user_validate' =>[
					[
						'field'=>'email',
						'label'=>'Email',
						'rules'=>'trim|required|valid_email'
					],
					[
						'field'=>'password',
						'label'=>'password',
						'rules'=>'trim|required'
					],
				],


				'is_user_register'=>[

					[
						'field'=>'username',
						'label'=>'Username',
						'rules'=>'required|regex_match[/^[a-zA-Z][a-zA-Z\\s]+$/]'
					],
					[
						'field'=>'mobile_number',
						'label'=>'Contact Or Mobile Number',
						'rules'=>'required|numeric|min_length[10]|max_length[10]'
					],
					[
						'field'=>'email',
						'label'=>'Email ID',
						'rules'=>'required|valid_email'
					],
					[
						'field'=>'password',
						'label'=>'Password',
						'rules'=>'trim|required|min_length[8]|max_length[20]'
					],
					[
						'field'=>'confirm_password',
						'label'=>'Password',
						'rules'=>'matches[password]|required|min_length[8]|max_length[20]'


					],
					[
						'field'=>'check1',
						'label'=>'Check It',
						'rules'=>'required'
					],

				],

				'contact_us_details'=>[
					[
						'field'=>'customer_name',
						'label'=>'Name',
						'rules'=>'required|regex_match[/^[a-zA-Z][a-zA-Z\\s]+$/]'	
					],
					[
						'field'=>'customer_email',
						'label'=>'Email Id',
						'rules'=>'required|valid_email'
					],
					[
						'field'=>'customer_mobile',
						'label'=>'Mobile',
						'rules'=>'required|numeric|min_length[10]|max_length[10]'
					],
					[
						'field'=>'customer_feedback',
						'label'=>'Feedback Or Complaint or Sujjetion',
						'rules'=>'required|min_length[10]'

					],
					
				],
						
				'validate_guesthouse_details'=>[
					[
						'field'=>'guesthouse_name',
						'label'=>'Guest House Name',
						'rules'=>'required|regex_match[/^[a-zA-Z][a-zA-Z\\s]+$/]'
					],
					[
						'field'=>'guesthouse_address',
						'label'=>'Address',
						'rules'=>'required|min_length[3]'
					],
					[
						'field'=>'guesthouse_area',
						'label'=>'Area',
						'rules'=>'required|min_length[3]'
					],
					[
						'field'=>'guesthouse_pincode',
						'label'=>'Pincode',
						'rules'=>'required|min_length[6]|numeric|max_length[6]'
					],
					

					
					[
						'field'=>'guesthouse_city',
						'label'=>'City Or District',
						'rules'=>'required',
					],

					
					
					[
						'field'=>'guesthouse_official_site',
						'label'=>'Enter Website',
						'rules'=>'valid_url'
				    ],

					[

					    'field'=>'guesthouse_facility',
						'label'=>'Facility',
						'rules'=>'required|min_length[10]'
					],

				],

				'validate_caterers_details'=>
				[
					[
						'field'=>'catering_name',
						'label'=>'Catering  Name',
						'rules'=>'required|regex_match[/^[a-zA-Z][a-zA-Z\\s]+$/]'
					],
					[
						'field'=>'caterers_address',
						'label'=>'Address',
						'rules'=>'required|min_length[3]'
					],
					[
						'field'=>'caterers_area',
						'label'=>'Area',
						'rules'=>'required|min_length[3]'
					],
						
					[
						'field'=>'caterers_pincode',
						'label'=>'Pincode',
						'rules'=>'required|min_length[6]|numeric|max_length[6]'
					],
					
					[
						'field'=>'caterers_city',
						'label'=>'City Or District',
						'rules'=>'required',
					],
					
					[

					    'field'=>'caterers_services',
						'label'=>'Facility',
						'rules'=>'required|min_length[10]'
					],


					
				],

				'validate_studio_form_details'=>
				[
					[
						'field'=>'studio_name',
						'label'=>'Photo Studio  Name',
						'rules'=>'required|regex_match[/^[a-zA-Z][a-zA-Z\\s]+$/]'
					],
					[
						'field'=>'studio_address',
						'label'=>'Address',
						'rules'=>'required|min_length[3]'
					],
					[
						'field'=>'studio_area',
						'label'=>'Area',
						'rules'=>'required|min_length[3]'
					],
					[
						'field'=>'studio_pincode',
						'label'=>'Pincode',
						'rules'=>'required|min_length[6]|numeric|max_length[6]'
					],
					
					[
						'field'=>'studio_city',
						'label'=>'City Or District',
						'rules'=>'required',
					],

					[

					    'field'=>'studio_services',
						'label'=>'Facility',
						'rules'=>'required|min_length[10]'
					],


					
				],

				'is_user_update'=>[

					[
						'field'=>'username',
						'label'=>'Username',
						'rules'=>'required|regex_match[/^[a-zA-Z][a-zA-Z\\s]+$/]'
					],
					[
						'field'=>'mobile_number',
						'label'=>'Contact Or Mobile Number',
						'rules'=>'required|numeric|min_length[10]|max_length[10]'
					],
					[
						'field'=>'email',
						'label'=>'Email ID',
						'rules'=>'required|valid_email'
					],
					

				],
				'update_password_validation'=>[
					[
						'field'=>'password',
						'label'=>'Current Password',
						'rules'=>'trim|required|min_length[8]|max_length[20]'
					],
					[
						'field'=>'newpass',
						'label'=>'New Password',
						'rules'=>'required|min_length[8]|max_length[20]'


					],
					[
						'field'=>'confpassword',
						'label'=>'Confirm Password',
						'rules'=>'matches[newpass]|required|min_length[8]|max_length[20]'


					],


				],
				'comment_validation'=>[
					[
						'field'=>'commentors_name',
						'label'=>'Name',
						'rules'=>'required|regex_match[/^[a-zA-Z][a-zA-Z\\s]+$/]'	
					],
					[
						'field'=>'commentors_email',
						'label'=>'Email Id',
						'rules'=>'required|valid_email'
					],
					
					[
						'field'=>'commentors_feedback',
						'label'=>'Comment...',
						'rules'=>'required'

					],
				]



	]





 ?>