<!DOCTYPE html>
<html>
<head>
	<title>
		My fashion star
	</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	
  	<link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body style="background-color: purple;color: white;">
<!--?php include 'navigation.php'; ?-->
<?php
    session_start();
    $con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');

    ?>
	<table border="5" cellspacing="10">
      <tr>
        <td>hvsjcs</td>
        <td>opieo</td>
      </tr>
      <tr>
        <td>dtss</td>
        <td>euhsi</td>
      </tr>
      
    </table>


</body>
</html>