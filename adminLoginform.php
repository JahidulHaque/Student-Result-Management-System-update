<?php
include("connection.php");

error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	

	

	<style type="text/css">
		.bg{
			background: url('bg3.jpg')no-repeat center center fixed ;
			-moz-background-size: cover;
			-webkik-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		.form-container{
			background: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px #000;
		}
		
			input[type=text],[type=password],[type=email],[type=number] {
			  width: 20%;
			  padding: 10px 20px;
			  
			  background-color: green;
			}
			input[type=submit]{
			  padding: 12px 24px;
			  border: none;
			  background-color: blue;
			  color: white;
			  cursor: pointer;
			}
			.main {
				width: 55%;
				margin-left: 25%;
			}
		
	</style>

	
	
</head>
<body class="bg">

	
	<header class="headerdiv">
	

	</header>
	<!--<h2 align="center" color="black" font-weight=30px>Admin Login Form</h2>
		<form  method="POST" action="adminloginvalidate.php" align="center">
                   
                        
				<P>Enter Username:</p>
				<input type="text" name="username">
				<P>Enter Password:</p>
				<input type="password" name="pass">

				<br><br><button type="submit" value="submit" name="submit">Submit</button>
			</form>-->


			<h2 align="center" font-weight=30px><b>Admin Login Form</b></h2>


			
						<form  method="POST" action="checkvalidate.php">
							<div align="center" font-weight=30px>
								<label for="ex">Username</label>
								<input type="name" class="form-control" name="username">
							</div>
							<div align="center" font-weight=30px>
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" name="pass">
							</div>
							
							 
							<button type="submit" value="submit" name="submit"> Login</button>
							
							
						</form>
						
					
					
				
			


		</body>
		</html>