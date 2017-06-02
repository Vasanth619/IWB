<?php

if(empty($_SESSION['logged_in'])) {
	header('Location: '.$_CONFIG["base_url"].'index.php?page=login');
}



?>