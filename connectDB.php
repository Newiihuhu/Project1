<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'metflix';

	$cid = mysqli_connect($host,$user,$password,$database) or die("Unable to connect to MySQL or database");

    echo("Hello")
	//  if($cid){echo 'yes';}
?>