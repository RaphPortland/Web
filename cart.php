<?php

session_start();


if (isset($_SESSION['newvaleueonthecart'])) {


	$workwith = $_SESSION['newvaleueonthecart'];

	//array_push($workwith, $_GET["id"]);
	if(isset($workwith[$_GET["id"]])){		
		$workwith[$_GET["id"]] = $workwith[$_GET["id"]]+1;
	}
	else {
		$workwith[$_GET["id"]] = 1;
	}

}
else {
	$workwith = array();
	$workwith[$_GET["id"]] = 1;

}

unset($workwith[0]);
$_SESSION['newvaleueonthecart'] = $workwith;


	header('Location:' . $_SERVER['HTTP_REFERER']);



?>
