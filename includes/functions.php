<?php session_start();

function site_info($title,$description){
	$_SESSION['title'] = $title;
	$_SESSION['description'] = $description;
}

$site_title = (isset($_SESSION['title']))? $_SESSION['title']: null;
$site_description = (isset($_SESSION['description']))? $_SESSION['description']: null;



