<?php
	class LOGIN
	{
	    function forgot_pwd_link_template($access_id=null)
	    {   
	        global $_CONFIG;
	        $mail['to']['mail'] = 'ramachandran@clorida.com';
	        $mail['to']['name'] = "admin@classscheduler.com";
	        
	        $mail['data']['$recipient_mail'] = 'ramachandran@clorida.com';
	        //$mail['data']['$subject'] = 'verification link';    
	        $mail['data']['$url'] =  "forgot_pwd_link_template";
	       
	        $mail['template']='forgot_pwd_link_template';	     
	        
	        $_response = MAIL_TEMPLATE::get_mail_template($mail);   
	        return $_response;    
	    }
	}	

?>