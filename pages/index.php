<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSRF</title>
       
        <link rel="stylesheet"  href="../styles/stylesnew.css">  
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

.nav-link1{
	margin-left:195px;
	margin-top: 20px;
}
</style>
    </head>
       
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
                                <a class='nav-link active' href='profile.php'>Profile</a>
                            </div>";
                    }
                ?>
          
                <?php 
                    if(!isset($_COOKIE['session_id'])) 
                    {
                        echo "<div class='nav-item'>
                                <a class='nav-link' href='login.php'>Login</a>
                            </div>";
                    }
                ?>
                
                <?php 
                    if(isset($_COOKIE['session_id'])) 
                    {
                        echo "<div class='nav-item'>
                                <a class='nav-link1' href='logout.php'>Logout</a>
                            </div>";
							
							//if($_POST["csrf_Token"] == $csrf_tokens[$_COOKIE['session_id']])
							
                    }
                ?>
            </ul>
        </nav>
		</html>