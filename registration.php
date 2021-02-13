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
    $enc_pass = md5($pass);
    $email = $_POST['email'];
    $phone = $_POST['m_number'];

    $query = "select * from userlogin where username ='$name' or email ='$email' ";

    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);

    if ($num ==1)
    {
      echo "username or email already taken !!!";
    }
    else
    {
      $table1="create table $name (id int(200) auto_increment primary key, item_id varchar(200) not null, name varchar(200) not null, color varchar(200) not null, quantity int(200) not null, product_price int(200) not null, full_length int(200) not null, chest int(200) not null, waist int(200) not null, hips int(200) not null, f_neck int(200) not null, b_neck int(200) not null, shoulder int(200) not null, sleeves_length int(200) not null, sleeves_bottom int(200) not null, armhole int(200) not null, total_price int(200) not null)";
      mysqli_query($con, $table1);
      

      $reg = "insert into userlogin (username, password, encrypted_password, email, Phone_number) values('$name', '$pass','$enc_pass', '$email', '$phone')";
      mysqli_query($con, $reg);
      header('location:secondPage.php');
      echo "Registration successful!!!";

    }
    ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>