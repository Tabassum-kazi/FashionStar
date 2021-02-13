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


    //$image = $_POST['cimage'];
    $title = $_POST['ctitle'];
    $amount = $_POST['camount'];
    $path = $_POST['cpath'];
    $item_id = $_POST['id_num'];

    $table_name = $_SESSION['username'];

    /*echo $title;
    echo $amount;
    echo $path;*/

    $query = "select * from $table_name where item_id ='$item_id' ";
    
    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);

    if ($num >= 1)
    {
      $reg = " delete from $table_name where item_id ='$item_id' ";
      mysqli_query($con, $reg);
      header('location:cart.php');
      //echo "success";

    }
    else
    {
      header('location:cart.php');
      //echo "Item added successfully!!!";

    }
    ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>