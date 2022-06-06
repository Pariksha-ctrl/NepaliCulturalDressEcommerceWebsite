<?php

// STARTING THE SESSION HERE
session_start();

if (isset($_SESSION["admin_id"])) {
	session_destroy();
	header("location:admin_login.php");
}else{
	header("location:index.php");
}

?>