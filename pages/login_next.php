<?php
 //session_start();
 $csrf_tokens = include './csrf.txt';

if(isset($_POST['email'],$_POST['password'])){
	$mail = $_POST['email'];
	$pwd = $_POST['password'];
	if($mail == 'hi@gmail.com' && $pwd == 'hi'){
		echo '<h1>Successfully logged in</h1>';
		
		//$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
		$session_id = uniqid();
		$csrf_tok = base64_encode(openssl_random_pseudo_bytes(32));
		
		$csrf_tokens[$session_id] = $csrf_tok; //*********//
		
		file_put_contents('./csrf.txt', '<?php return ' . var_export($csrf_tokens, true). ';');
		//setcookie('sessionCookie',$session_id,time()+ 60*60*24*365 ,'/');
		setcookie('session_id',$session_id,time()+ (86400 * 30), "/");
		//setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60*24*365 ,'/');
		header("location: ./profile.php");
		
	}else{
		echo '<h1>Invalid Credentials</h1>';
		header('location: ./login.php?error=Invalid');
		exit();
	}
	
}
?>