<!DOCTYPE>
<html>
<head>

   <title>Registration page</title>
 <link  rel="stylesheet"  href="../styles/stylesnew.css" >
 <script src="../js/jquery-3.3.1.min.js"></script> <!-- *********** put two dots to go two backs -->
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
                                <a class='nav-link active' href='logout.php'>Logout</a>
                            </div>";
                    }
                ?>
            </ul>
        </nav>


<div style="padding:5px; width: 650px; margin:auto;">
 <?php if(isset($_COOKIE['session_id'])) {
                echo "
						<form action='validation.php' method='POST' enctype='multipart/form-data' style='margin-bottom:0px'>
                            	<!-- CSRF Token -->
                            	<input type='hidden' name='csrf_Token' value='' id='csrf_Token' >
                                <!--  -->
	  
	 
			   <fieldset>
				    <legend><h3 align='center' font-face='Two Cen MT'> CREATE ACCOUNT DETAILS</h3></legend>

  			    <input class = 'inputs' type='text' name='fname' placeholder='First Name' required> <br><br>
  			    <input class = 'inputs' type='text' name='lname' placeholder='Last Name' required><br><br>
  			    <input class = 'inputs' type='text' name='email' placeholder='Email' required><br><br>
            <input class = 'inputs' type='text' name='phonenum' placeholder='Phone number' required><br><br>
            <input class = 'inputs' type='date' name='dob' placeholder = 'dd/mm/yyyy' required><br><br>
			     

            <input type='submit' value='submit' class = 'confirm' name = 'submit' >
			    </fieldset>
		  </form>";
 }
 ?>
		  
						
						
		<script>
    	var request="true";
        $.ajax({
        url:"request.php",
        method:"POST",
        data:{request:request},
        dataType:"json",
        success:function(data)
        {
            document.getElementById("csrf_Token").value=data.token;
        }
        })
		</script>
						</div>
	</body>
	</html>
