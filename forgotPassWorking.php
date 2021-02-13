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
    $new_pass = $_POST['password'];
    $enc_new_pass = md5($new_pass);
    $email = $_POST['email'];
    $phone = $_POST['m_number'];

    $query = "select * from userlogin where username ='$name' && email ='$email' && Phone_number ='$phone' ";

    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);

    if ($num ==1)
    {
      $update_query_1 = "update userlogin set password ='$new_pass' ";
      $update_query_2 = "update userlogin set encrypted_password ='$enc_new_pass' ";
      mysqli_query($con, $update_query_1);
      mysqli_query($con, $update_query_2);
      echo "Password changed successfully!!!";
      ?> 
      <br><br> &nbsp; &nbsp; 
      <a href="secondPage.php" class="btn btn-primary">Login</a>
      <?php  
    }
    else
    {
      echo "Sorry! we can't allow you to change the password :(";

    }
    ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>