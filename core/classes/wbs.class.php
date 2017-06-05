<?php
	class WBS{

		function get_script($folder,$type,$files,$script_for=null)
		{

			if(!empty($files)){
				if(!is_array($files)){
					$_files[] = $files;
				}else{
					$_files = $files;
				}

				if(is_array($folder)){
					$folder_path = $folder['path'];
					$loc = $folder['loc'];
					$check_file_exists = true;
				}else{
					$ok_to_load = true;
					$loc = $folder;
					$check_file_exists = false;
				}

				foreach($_files as $file){

					if(($script_for == "page") && ($type == "js")){
						$file = $file.".js.php";
					}else{
						$file = $file.".".$type;
					}

					if($check_file_exists){
						$ok_to_load = false;
						if(file_exists($folder_path.$file)){
							$ok_to_load = true;
						}else{
							?>
							<!-- Not Found <?php echo $loc.$file;?>-->
							<?php
						}
					}

					if($ok_to_load){
						switch($type){
							case "js":
								?>
								<script type="text/javascript" src="<?php echo $loc.$file;?>"></script>
								<?php
							break;

							case "css":
								?>
								<link rel="stylesheet" type="text/css" href="<?php echo $loc.$file;?>" media="all">
								<?php
							break;
						}
					}
				}
			}
		}


	    function loadpage_script($_PAGE){
	        global $_CONFIG;
	        self::get_script(array('path'=>$_CONFIG['html_css_path'],'loc'=>$_CONFIG['html_css_loc']),'css',$_PAGE);
	        self::get_script(array('path'=>$_CONFIG['html_js_path'],'loc'=>$_CONFIG['html_js_loc']),'js',$_PAGE,'page');
	    }
	     function get_current_time()
	    {
	    	return time();
	    }

	    function get_date_formate($time=null, $format=null)
	    {
	    	if(!$time){
	    		$time = time();
	    	}
	    	if(!$format){
	    		$format = "M j,Y";
	    	}
	    	return date($format, $time);
	    }

   		function check_login($para)

		{

			$login_mail= $para['username'];


			$converted_pwd= md5($para['password']);
			$get_login_data= DB::select_from_table(array('table'=>'admin','where'=>array('email'=>$login_mail,'password'=>$converted_pwd),'return'=>'row'));
			//print_r($get_login_data);exit;

			$user_profile_name=$get_login_data['data']['user_profile_name'];




			if($get_login_data['count'] == 1)
			{
				$_SESSION['logged_in'] = true;
				$_SESSION['user']= $get_login_data['data'];
				return "true";
			}
			else
			{

				$_SESSION['logged_in']= false;
				return "false";
			}


		}



		function update_data($para)

		{


		$userid = $para['uid'];
        $name = $para['uid'];
		$email = $para['uid'];
		$dob = $para['uid'];
		$gender = $para['uid'];
		$civil = $para['uid'];
		$age = $para['uid'];
        //print_r($para);exit;
		//$converted_pwd= md5($para['password']);
		$get_login_data= DB::update_to_table(array('table'=>'userdata','update'=>array('name'=> $name,'email'=>$email,'dob'=>$dob,'age'=>$age,'gender'=>$gender,'civilStatus'=>$civil),'where'=>array('uid'=>$userid),'return'=>'row'));
		//$user_profile_name=$get_login_data['data']['user_profile_name'];


exit;

		if($get_login_data['count'] == 1)
		{
		$_SESSION['logged_in'] = true;
		$_SESSION['user']= $get_login_data['data'];
		return "true";
		}
		else
		{

		$_SESSION['logged_in']= false;
		return "false";
		}


		}






        function mail($mail_data)
        {

            if(isset($mail_data['to']))
            {
				$headers .= "MIME-Version: 1.0 \n";
			    $headers .= "Content-type: text/html; charset=UTF-8 \n";
                $headers .= "From: ".$mail_data['from']. "\r\n";

                if($mail_data['reply_to']){
                    $headers .= "Reply-to: " .$mail_data['reply_to'].  "\r\n";
                }
                if($mail_data['return']){
                    $headers .= "Return-Path: ".$mail_data['return']. "\r\n";
                    $add_header = '-r '.$mail_data['return'];
                }
                if($mail_data['bcc']){//added by karthi if in case we need to send a bcc
                    $headers .= "Bcc: ".$mail_data['bcc']."\r\n";
                }

                if($mail_data['cc']){//added by ram if in case we need to send a cc
                    $headers .= "cc: ".$mail_data['cc']."\r\n";
                }

                if($mail_data['message_id']){
                    $headers .= "Message-Id: <".$mail_data['message_id']. ">\r\n";
                }
                file_put_contents('mail.txt', print_r($mail_data, true));
                //CORE::debug($mail_data,"Sending Mail - ".$mail_data['sub'].$add_header,'mail');
                sleep(10);
                	if(@mail($mail_data['to'],$mail_data['sub'],stripslashes($mail_data['message']),$headers,$add_header))
					{
						//return 'The mail has been successfully sent.';
                        return true;
					}
                    else
                    {
                        return 'The mail has not been successfully sent.';
                    }
			}
        }



	}

?>
