<?php
	session_start();
	if ((isset($_SESSION['login'])) and (isset($_SESSION))) {
		$_SESSION['login'] = '';
		$_SESSION['senha'] = '';
		session_destroy();
		header('location: index.html');
	}
?>