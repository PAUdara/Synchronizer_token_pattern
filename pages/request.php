<?php
	$csrf_tokens = include './csrf.txt';
	//reply to the json request with the CSRF token save in the server side
	//session_start();
	if(isset($_POST["request"]))
	{
		$data["token"]= $csrf_tokens[$_COOKIE['session_id']]; //*********get token using session id //
		echo json_encode($data);	
	}
	
?>