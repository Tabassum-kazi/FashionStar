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
<body style="background-color: purple; color: white;">

	<h1>
		<?php 
    session_start();
    

		$con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');

    $order_id = $_POST['order_id'];
    $name = $_POST['name'];
    $product_id = $_POST['product_id'];
    $phone_number = $_POST['phone_number'];
    

    $query_1 = "update `delivery` set `delivered`='Yes' where id='$order_id' ";
    mysqli_query($con, $query_1);
    $query_1 = "update `dress` set `ready`='Yes' where id='$order_id' ";
    mysqli_query($con, $query_1);
    header('location:orders.php');

    ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>