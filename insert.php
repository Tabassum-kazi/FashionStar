<!DOCTYPE html>
<html>
<head>
  <title>
    My fashion star
  </title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
  
</head>
<body background="images\background-cardpage.jpg" style="background-attachment: fixed; color: white; background-repeat: no-repeat;background-size: cover;">

	<h1>
		<?php 
    session_start();
    

		$con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');


    $path = $_POST['path'];
    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $path2 = $_POST['path2'];
    $path3 = $_POST['path3'];
    $path4 = $_POST['path4'];
    $description = $_POST['description'];
    $ci1 = $_POST['ci1'];
    $ci2 = $_POST['ci2'];
    $ci3 = $_POST['ci3'];
    $color1 = $_POST['color1'];
    $color2 = $_POST['color2'];
    $color3 = $_POST['color3'];
    $color4 = $_POST['color4'];

    $query = "insert into `seemore` (path, title, amount, category, path2, path3, path4, description, ci1, ci2, ci3, color1, color2, color3, color4) values('$path', '$title', '$amount', '$category', '$path2', '$path3', '$path4', '$description', '$ci1', '$ci2', '$ci3', '$color1', '$color2', '$color3', '$color4')";
    mysqli_query($con, $query);
    header('location:adminPage.php');

    ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>