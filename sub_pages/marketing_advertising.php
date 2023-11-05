<?php

	@include('./config.php');

	session_start();

	if(!isset($_SESSION['user_name'])) {
		header('location: ../Login_User_and_Admin_page/login_form.php');
	}

?>