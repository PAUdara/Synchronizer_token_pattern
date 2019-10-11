<?php
	$csrf_tokens = include './csrf.txt';
	//loged out function
	
	session_start();
	session_unset();
	session_destroy();
	//destroy session and all the variables
	unset($_COOKIE['session_id']);
	//setcookie('PHPSESSID', '', time() - 3600, '/');
    setcookie('session_id', '', time() - 3600, '/');
	file_put_contents('./csrf.txt',  '<?php return ' . var_export($csrf_tokens, true) . ';');

	header("Location:index.php");
   	exit;


?>