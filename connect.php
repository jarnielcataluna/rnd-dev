<?php

date_default_timezone_set('Asia/Taipei');

$config = array(
    'host'		=> '205.186.138.226:3306',
    'user'		=> 'rnd_ibex_staging',
    'pass'		=>'123rnd_ibex_staging@@',
    'database'	=> 'propelrr_ibex_staging'
);
$dbh = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['database'], $config['user'], $config['pass']);
$dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>