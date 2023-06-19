<?php 
session_start();
if ($_SESSION['user']) {	
	session_destroy();
	header("location:../views/login/index.php");
} else {
	header("location:../views/login/index.php");
}
?> 