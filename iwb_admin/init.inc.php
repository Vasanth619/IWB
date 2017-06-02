<?php
	require_once "../common_init.inc.php";

	$_CONFIG['base_path'] = dirname(__FILE__).$_ds;
	$_CONFIG['base_url'] = $_CONFIG['base_url']."iwb_admin/";


	//cache file end for plans,features,plan_features
	$_CONFIG['classes_path'] = $_CONFIG['core_path'].'classes'.$_ds;
	$_CONFIG['inc_path'] = $_CONFIG['core_path'].'inc'.$_ds;

	//default page 
	$_CONFIG['default_page']='dashboard';
	//image path
/*	$_CONFIG['img_loc'] = $_CONFIG['base_url'].'img/';//base js url
	$_CONFIG['img_path'] =$_CONFIG['base_path'].'img'.$_ds;

	$_CONFIG['img_icon_loc'] = $_CONFIG['img_loc'].'icons/';//base js url
	$_CONFIG['img_icon_path'] =$_CONFIG['img_path'].'icons'.$_ds;*/


/*	$_CONFIG['js_loc'] = $_CONFIG['base_url'].'lib/js/';//base js url
	$_CONFIG['js_path'] =$_CONFIG['base_path'].'lib'.$_ds.'js'.$_ds;
	$_CONFIG['css_loc'] = $_CONFIG['base_url'].'lib/css/';//base css url
	$_CONFIG['css_path'] =$_CONFIG['base_path'].'lib'.$_ds.'css'.$_ds;*/
	//html css & js config
	$_CONFIG['html_loc'] = $_CONFIG['base_url'].'view/';
	$_CONFIG['html_path'] = $_CONFIG['base_path'].'view'.$_ds;
	$_CONFIG['html_css_loc'] = $_CONFIG['html_loc'].'css/';
	$_CONFIG['html_css_path'] = $_CONFIG['html_path'].'css'.$_ds;
	$_CONFIG['html_js_loc'] = $_CONFIG['html_loc'].'js/';
	$_CONFIG['html_js_path'] = $_CONFIG['html_path'].'js'.$_ds;

	//debug status
	$_CONFIG['debug']= false;
	/***********************************************************/

	/** LANGUAGE **/
	if(isset($_GET['lang']))
	{
	    if(!empty($_GET['lang']))
	    {
	     $_SESSION['lang']=$_GET['lang'];
	    }else{
	        $_SESSION['lang']='en';
	    }
	}
	 elseif(empty($_SESSION['lang']))
	{
	    $_SESSION['lang']='en';
	}
	include_once($_CONFIG['lang_path'].$_SESSION['lang'].$_ds.'text.php');
	/** LANGUAGE **/

	//assigning the includes
	include_once $_CONFIG['inc_path'].'load_inc.php'; 
	include_once $_CONFIG['classes_path'].'load_classes.php';
	include_once $_CONFIG['inc_path'].'display_text.php';
	//End assigning the includes
	$db = new DB;
	$wbs =new WBS;

	if(!$db->connect($_DBCONFIG)){//connecting to DB
	    die("<!--Error in connection-->");
	}

?>