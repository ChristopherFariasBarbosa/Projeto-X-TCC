<?php
	session_start();
	if ((isset($_SESSION['email'])) and (isset($_SESSION))) {
		$_SESSION['email'] = '';
		$_SESSION['senha'] = '';
		session_destroy();
		header('location: login.html');
	}
?>