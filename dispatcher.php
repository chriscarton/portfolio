<?php
if(!empty($_GET) && !empty($_GET['p']) && is_string($_GET['p'])){
	$project = $_GET['p'];
	$path = 'projects/'.$project.'.php';
	if(file_exists($path)){
		include_once('projects/'.$project.'.php');
	}
}else{
	include_once('listing.php');
}
?>