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


    $colours = $_POST['colours'];
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $product_id = $_POST['product_id'];
    $product_amount = $_POST['product_amount'];
    $length = $_POST['length'];
    $chest = $_POST['chest'];
    $waist = $_POST['waist'];
    $hip = $_POST['hip'];
    $fneck = $_POST['fneck'];
    $bneck = $_POST['bneck'];
    $shoulder = $_POST['shoulder'];
    $slength = $_POST['slength'];
    $sbottom = $_POST['sbottom'];
    $armhole = $_POST['armhole'];

    $total = $quantity * $product_amount ;   


    $table_name = $_SESSION['username'];

    $query = "select * from $table_name where item_id='$product_id' ";

    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);

    if ($num ==1)
    {
      echo "item already in cart !!!";
      //echo $image;
    }
    else
    {
      
      $reg = "insert into $table_name (item_id, name, color, quantity, product_price, full_length, chest, waist, hips, f_neck, b_neck, shoulder, sleeves_length, sleeves_bottom, armhole, total_price) values('$product_id', '$name', '$colours', '$quantity', '$product_amount', '$length', '$chest', '$waist', '$hip', '$fneck', '$bneck', '$shoulder', '$slength', '$sbottom', '$armhole', '$total')";
      mysqli_query($con, $reg);
      header('location:cart.php');
      //echo $_SESSION['username'];;
      echo "Item added successfully!!!";

    }
    ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>