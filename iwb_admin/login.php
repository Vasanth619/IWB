<?php
/*
* login.php
* validate the login data
*/

require_once "init.inc.php";

if(isset($_POST['login'])) {
	
	$_POST['role'] = "admin";
	//call login fucntion
	$loginReturnValue = $wbs->check_login($_POST);
	 
	echo $loginReturnValue;	 
    
    
    
    
}



?>
