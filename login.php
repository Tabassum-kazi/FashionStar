<!DOCTYPE html>
<html>
<head>
  <title>
    My fashion star
  </title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body background="images\background-cardpage.jpg" style="background-attachment: fixed; color: white; background-repeat: no-repeat;background-size: cover;">

	<h1>
		<?php 
    session_start();
    

		$con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');


    $name = $_POST['user'];
    $pass = $_POST['password'];
    if ($name == "Admin" && $pass == "admin") 
    {
      header('location:adminHome.php');
    }
    else
    {

    $enc_pass = md5($pass);
    $query = "select * from userlogin where username='$name' && encrypted_password='$enc_pass'";

    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);

    if ($num ==1)
    {
      $_SESSION['username'] = $name;
      header('location:home.php');
    }
    else
    {
    
      echo "Incorrect username or password";
      
    }
  }

    ?>





</body>
</html>