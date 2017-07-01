<?php
         
	//date_default_timezone_set('America/New_York');
	@session_start();
	//error_reporting(0);
	error_reporting(E_ERROR | E_WARNING | E_PARSE );
	//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	/*if($_GET['logout'])
	{
	 session_destroy();
	 die;
	}*/
	$_ds = DIRECTORY_SEPARATOR;
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

	/***********************************************************/
	$_CONFIG['base_path'] = dirname(__FILE__).$_ds;
	$_CONFIG['core_path'] = $_CONFIG['base_path'].'core'.$_ds;
	$_CONFIG['feature_path']=$_CONFIG['core_path'].'features'.$_ds;
	$_CONFIG['lang_path']=$_CONFIG['base_path'].'lang'.$_ds;

	//server base url
	$_CONFIG['base_url'] = $protocol.$_SERVER['HTTP_HOST'].'/';

	/* Local base_url */
	/*if($_SERVER['DOCUMENT_ROOT']=='C:/xampp/htdocs'){
	    $_CONFIG['base_url'] = $_CONFIG['base_url'].'project/class_scheduler/'; // Local
	    $_CONFIG['base_url'] = $_CONFIG['base_url'].'dev/classscheduler/'; // Int Server
	}*/

	if($_SERVER['DOCUMENT_ROOT']){
		switch ($_SERVER['DOCUMENT_ROOT']) {
			case 'C:/xampp/htdocs':
				$_CONFIG['base_url'] = $_CONFIG['base_url'].'IWB/'; // Local
			break;
			case "/home/cloridadev/public_html":
				$_CONFIG['base_url'] = $_CONFIG['base_url'].'dev/classscheduler/'; // Int Server
			break;			
			default:
				$_CONFIG['base_url'] = $protocol.$_SERVER['HTTP_HOST'].'/';
			break;
		}
		//echo $_CONFIG['base_url'];
	}
	

	//image path
	$_CONFIG['img_loc'] = $_CONFIG['base_url'].'img/';//base js url
	$_CONFIG['img_path'] =$_CONFIG['base_path'].'img'.$_ds;

	$_CONFIG['icon_img_loc'] = $_CONFIG['img_loc'].'icons/';//base js url
	$_CONFIG['icon_img_path'] =$_CONFIG['img_path'].'icons'.$_ds;

	$_CONFIG['family_img_loc'] = $_CONFIG['img_loc'].'family/';//base js url
	$_CONFIG['family_img_path'] =$_CONFIG['img_path'].'family'.$_ds;

	$_CONFIG['student_img_loc'] = $_CONFIG['img_loc'].'student/';//base js url
	$_CONFIG['student_img_path'] =$_CONFIG['img_path'].'student'.$_ds;

	$_CONFIG['teacher_img_loc'] = $_CONFIG['img_loc'].'teacher/';//base js url
	$_CONFIG['teacher_img_path'] =$_CONFIG['img_path'].'teacher'.$_ds;

	$_CONFIG['js_loc'] = $_CONFIG['base_url'].'lib/js/';//base js url
	$_CONFIG['js_path'] =$_CONFIG['base_path'].'lib'.$_ds.'js'.$_ds;

	$_CONFIG['css_loc'] = $_CONFIG['base_url'].'lib/css/';//base css url
	$_CONFIG['css_path'] =$_CONFIG['base_path'].'lib'.$_ds.'css'.$_ds;	
	
	
	

?>