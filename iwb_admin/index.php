<?php
include_once "init.inc.php";
//$_SERVER['REQUEST_URI']
;
include_once "header.php";

$_PAGE = $_CONFIG['default_page'];

if(isset($_GET['page'])){
	
	
	if($_GET['page']){
    	$_PAGE = $_GET['page'];
	}
}

if(file_exists($_PAGE.".php"))
{
    include_once($_PAGE.".php"); 
}
//-------------------------------
if(file_exists($_CONFIG['html_path'].'tpl_index.php'))
{
    include_once($_CONFIG['html_path'].'tpl_index.php'); 
}  
/*
$insert["role"] = "Clorida Ram";
$insert["role_key"] = "clorida_ram";
$insert["status"] = "1";

$rtrt = $db->select_from_table(array('query'=> "select * from `wbs_user_roles`",'return'=>'array'));
print_r($rtrt);die;
//if($db->insert_to_table(array('table'=>'wbs_user_roles','insert'=>$insert))){
//echo "Inserted";
//}

//$rrr = $db->select_from_table(array('table'=>'wbs_user_roles','where'=>array('status'=>1),'return'=>'row'));

//if($db->update_to_table(array('table'=>'wbs_user_roles','where'=>array('status'=>0),'update'=>array('status'=>1)))){
//echo "UPDATED";
//}

print_r($rrr);die;*/
  /*  $_where[DB::table("wbs_user_roles","status")] = 1;
    $_wbs_user_roles = DB::select(array(
        'table' => DB::table("wbs_user_roles"),
        'where' => $_where,
        'return' => 'array'
    ));


    print_r($_wbs_user_roles);*/


?>

