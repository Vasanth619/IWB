<?php
class MAIL_TEMPLATE
{
    function get_mail_template($data){
        return MAIL_TEMPLATE::$data['template']($data);
    }

    function format_mail($data){
        if(is_array($data)){
            return '"'.$data['name'].'" <'.$data['mail'].'>';
        }else{
            return '<'.$data.'>';
        }
    } 


    //function generate_mail_template($static_data,$new_data)
    function generate_mail_template($new_data)
    {
        global $_CONFIG;
        
        $new_data['to'] = MAIL_TEMPLATE::format_mail($new_data['to']); 
        $static_data['from'] = MAIL_TEMPLATE::format_mail($_CONFIG["from_mail"]);

        $mail_data = array_merge((array)$static_data, (array)$new_data);
        $subject = file_get_contents($_CONFIG['mail_sub_path'].$mail_data['template'].'.php',true);
 
        $message = file_get_contents($_CONFIG['mail_msg_path'].$mail_data['template'].'.php',true);        
        
		if(is_array($mail_data['data']))
		{
			$mail_data['sub'] = str_replace(array_keys($mail_data['data']),$mail_data['data'],$subject);
			$mail_data['message'] = str_replace(array_keys($mail_data['data']),$mail_data['data'],$message);
		}         

        return $mail_data;                
    }


    function forgot_pwd_link_template($new_data)
    {
        global $_CONFIG;

        //$new_data['to'] = MAIL_TEMPLATE::format_mail($new_data['to']); 
        //$static_data['from'] = MAIL_TEMPLATE::format_mail(WBS::from_mail());
        
        //$mail_data = MAIL_TEMPLATE::generate_mail_template($static_data,$new_data);  

        $mail_data = MAIL_TEMPLATE::generate_mail_template($new_data);  
             
        return $mail_data;                
    }

}

?>