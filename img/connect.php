<?php

	date_default_timezone_set('Asia/Taipei');

	$config = array(
		'host'		=> 'localhost',
		'user'		=> 'root',
		'pass'		=>'root',
		'database'	=> 'realtime_test'
	);
	$dbh = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['database'], $config['user'], $config['pass']);
	$dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


 ?>