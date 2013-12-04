<?php 
	require_once('Message.php');
	require_once('MessageDAO.php');
	/*
	* Array $config(configuration) for the Datas
	* Building Connection to the Database
	* Selecting of Database
	*/
	$config = array('file' => 'localhost', 'username' => 'root', 'password' => '', 'database' => 'guestbook_db' );
	mysql_connect($config['file'], $config['username'], $config['password']);
	mysql_select_db($config['database']);

	
 ?>
