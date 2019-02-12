<?php

	//$db = mysql_connect("localhost","root","");
	//mysqli_select_db("carpool",$db)or die( "<p><span style=\"color: red;\">Unable to select database</span></p>");



	$db = new PDO('mysql:host=localhost;dbname=profcon_donated;charset=utf8', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	/*

	$db = new PDO('mysql:host=167.114.175.49;dbname=prms;charset=utf8', 'prms-remote', 'jM76U2E4jgxDz64p');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	*/




?>
