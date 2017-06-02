<link rel="stylesheet" type="text/css" href="<?php echo $_CONFIG['css_loc'];?>wbs.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo $_CONFIG['css_loc'];?>fullcalendar.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo $_CONFIG['css_loc'];?>fullcalendar.print.css" media="print">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<?php
	$common_style[] = 'bootstrap.min';
	$common_style[] = 'custome-style';
	$common_style[] = 'responsive';
	/*$common_style[] = 'bootstrap-timepicker.min';
    $common_style[] = "jquery-ui";
	$common_style[] = 'jquery-ui-timepicker-addon';
    $common_style[] = "bootstrap-datetimepicker.min";
    //pickdate start
    $common_style[] = 'pick_date_default';
    $common_style[] = 'pick_date_default.date';*/
    //End

	WBS::get_script(array('path'=>$_CONFIG['css_path'],'loc'=>$_CONFIG['css_loc']),'css',$common_style);

    //WBS::get_script('//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/','js','jquery-ui.min.js');   
    
    //WBS::get_script(array('path'=>$_CONFIG['js_path'],'loc'=>$_CONFIG['js_loc']),'js',array('jquery.min.js','jquery-ui.js'));

	$common_script[] = 'jquery.min';
    $common_script[] = "jquery-ui-1.11.1";
    $common_script[] = 'jquery_form';
    WBS::get_script(array('path'=>$_CONFIG['js_path'],'loc'=>$_CONFIG['js_loc']),'js',$common_script);
?>


<?php
    
    //$common_script[] = 'jquery.min';
   /* $common_script[] = 'moment.min';
    $common_script[] = 'fullcalendar.min';*/
    $common_script[] = 'bootstrap';
    $common_script[] = 'bootstrap.min';
   /* $common_script[] = 'bootstrap-timepicker.min';
    $common_script[] = 'jquery-ui-timepicker-addon';
    //$common_script[] = "bootstrap-datetimepicker.min";

    $common_script[] = 'bootstrapmodal.min';*/

    //pickdate start
   /* $common_script[] = 'picker';
    $common_script[] = 'picker.date';
    $common_script[] = 'legacy';*/
    //End    

	WBS::get_script(array('path'=>$_CONFIG['js_path'],'loc'=>$_CONFIG['js_loc']),'js',$common_script);

?>


<?php

	WBS::loadpage_script($_PAGE);//loading the concern page script 

?>