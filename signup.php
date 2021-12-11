<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_mail = $_POST['user_mail'];
		$password = $_POST['password'];

		if(!empty($user_mail) && !empty($password) && !is_numeric($user_mail))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_mail,password) values ('$user_id','$user_mail','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html> 
<html> 
    <head>
        <title> DISRELTO - SIGNUP </title> 

        <link rel="stylesheet" href="signup_style_new.css"> 

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200&display=swap" rel="stylesheet">
    </head>

    <body> 
        <h1 id="heading_1"> DISRELTO </h1> <br>
        <h2 id="heading_2"> Making your distanced relationship easier </h2>  

		<a href="login.php">
		<button id="loginbtn"> Login </button>
		</a>


		
       
    </body>