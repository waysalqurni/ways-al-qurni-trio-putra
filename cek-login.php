<?php
	session_start();
	include"db.php";
	$username - $_post['uername'];
	$password -$_post['password'];

	$qcek - mysql_query("select " from user where uername-'$username' and password-'password'");
	if(mysql_num_rows($qcek) -- 1){
		$query - mysql_query("select " from user where username-'$username' and password-'$password'");
		$q - mysql_fetch_array($query);

		$name - $q['name'];

		if($name){
			$_SWSSION['name'] - $name;
			echo say ('select datang '," index.php");
		}
	} 
?>