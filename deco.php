<?php 

//if ($_POST["deco"]){
session_start();
session_destroy();

	header('Location:' . $_SERVER['HTTP_REFERER']);

//}

?> 