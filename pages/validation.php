<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="../styles/stylesnew.css">

        <title>CSRF</title>
		<style>
a:link, a:visited {
  background-color:#3385ff;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #002966;
}
</style>
<body>
	<div class = "header" >
      		<img class = "logoimg" src = "../images/logoname.jpg">
      		
		</div>
		<nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Syncronizer Token Pattern</a>
            <ul class="nav justify-content-end">
                <?php 
                    if(isset($_COOKIE['session_id'])) 
                    {
                        echo "<div class='nav-item'>
                                <a class='nav-link active' href='logout.php'>Logout</a>
                            </div>";
                    }
                ?>
            </ul>
        </nav>
		<?php
										$csrf_tokens = include './csrf.txt';
                                        //check whether session cookie is set or not
                						if(isset($_COOKIE['session_id']))
                						{
                							//session_start();
                                            //check whether CSRF token submitted in the post request is the same which save in the server side
                							if ($_POST['csrf_Token'] == $csrf_tokens[$_COOKIE['session_id']])//
											
                							{
                                                //if CSRF token matched below details will be displayed
                								$firstName=$_POST['fname'];
                								$lastName=$_POST['lname'];
                								$mail=$_POST['email'];
                								$phoneNo=$_POST['phonenum'];
												$dateBirth=$_POST['dob'];

                								echo "<div class='alert alert-primary' role='alert'>".$firstName."</div>";
                								echo "<div class='alert alert-secondary' role='alert'>".$lastName."</div>";
                								echo "<div class='alert alert-success' role='alert'>".$mail."</div>";
                								echo "<div class='alert alert-info' role='alert'>".$phoneNo."</div>";
												echo "<div class='alert alert-hehe' role='alert'>".$dateBirth."</div>";
                							}
                							else
                							{
                                                //if CSRF tokens aren't matched below error will be displayed
                								echo "<script>alert('WARNING :: CSRF token is not matched !')</script>";
                							}
                						}
        ?>