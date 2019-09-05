<?php
if(!empty($_GET) && !empty($_GET['p']) && is_string($_GET['p'])){
	$project = $_GET['p'];
	$path = 'projects/'.$project.'.php';
	$project = $projects[$project];
	include_once('view.php');
}else{
	include_once('listing.php');
}
?>