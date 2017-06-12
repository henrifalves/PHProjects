<?php

	include('request.php');
	session_start();
	$log = $_POST['email'];
	$pass =  $_POST['pass'];
	$exec = new CRUD();

	$value = $exec->select($log, $pass);
	$i = 1;
	if(count($value))
	{
		var_dump($value);
		foreach($value as $reg)
		{
			$_SESSION['ID'] = $reg['ID'];
			$_SESSION['email'] = $reg['email'];
			// $myObj->logs[$i]->email = $reg['usuario'];
			// $_SESSION['usuario'] = $reg['usuario'];
			$_SESSION['pass'] = $reg['pass'];

			$i++;
		}
		header("location:home.php");
		unset($_SESSION['log_flag']);

	}else{
		$_SESSION['log_flag'] = "1";
		unset($_SESSION['ID']);
		unset($_SESSION['email']);
		unset($_SESSION['pass']);
		header('location:../../index.php');
	}
?>