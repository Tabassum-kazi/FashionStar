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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="Capture3.jpg" height="5%" width="3%" />
  <a class="navbar-brand font-italic" href="#">F@$H!0N $T@R</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    
  </div>
</nav>

  <h1>
    <?php 
    $con=mysqli_connect('127.0.0.1:3360','root','');

    if ($con) {
      echo "Your booking is done :)";
    ?><br>
    <?php 
      echo "THANK YOU :)";
     }
     else
     {
      echo "SORRY! An error occured during connection :(";
     } ?>
  </h1>
  <?php 
    mysqli_select_db($con, 'project');

    $colours = $_POST['colours'];
    $quantity = $_POST['quantity'];
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
    $name = $_POST['name'];
    $product_id = $_POST['product_id'];
    $product_amount = $_POST['product_amount'];
    $utr_number = $_POST['utr_number'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $pin_code = $_POST['pin_code'];
    $flat_number = $_POST['flat_number'];
    $colony = $_POST['colony'];
    $landmark = $_POST['landmark'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    $total = $product_amount * $quantity;


    $payment = " " ;
    if ($utr_number == 00000) {
      $payment .= "COD";
    } else {
      $payment .= "DONE";
    }
    


    $query_1 = " insert into dress (product_id, color, quantity, product_amount, full_length, chest, waist, hip, front_neck, back_neck, shoulder, sleeves_length, sleeves_bottom, armhole) values ('$product_id','$colours','$quantity','$product_amount', '$length','$chest','$waist','$hip','$fneck','$bneck','$shoulder','$slength','$sbottom','$armhole') ";
    $query_2 = " insert into delivery (name, product_id, utr_no, email, phone, pin_code, flat_no, colony, landmark, state, city, country)  values ('$name','$product_id','$utr_number','$email','$phone_number','$pin_code','$flat_number','$colony','$landmark','$state','$city','$country') ";


    mysqli_query($con, $query_1);
    mysqli_query($con, $query_2);

    //header('location:buy.php')

   ?>
  <div class="container" style="background-color: white; color: black; width:30%;">
  <div class="login-box">
    <div class="row">
      <div class="col-md-6">
        <h2>Bill</h2>
        <form action="#" method="post">
        <!--div class="form-group">
          <table>
            <tr>
              <td>Buyer's name</td>
              <td> : </td>
              <td><?php echo $name; ?></td><br><br>
            </tr>
            <tr>
              <td>Product id</td>
              <td> : </td>
              <td><?php echo $product_id; ?></td><br><br>
            </tr>
            <tr>
              <td>Quantity</td>
              <td> : </td>
              <td><?php echo $quantity; ?></td><br><br>
            </tr>
            <tr>
              <td>Amount per Product</td>
              <td> : </td>
              <td><?php echo $product_amount; ?></td><br><br>
            </tr>
            <tr>
              <td>Total Amount</td>
              <td> : </td>
              <td><?php echo $total; ?></td><br><br>
            </tr>
          </table>
        </div-->

          <div class="form-group">
            <label>Buyer's name : <?php echo $name; ?></label>
          </div>
          <div class="form-group">
            <label>Product id : <?php echo $product_id; ?></label>
          </div>
          <div class="form-group">
            <label>Quantity : <?php echo $quantity; ?></label>
          </div>
          <div class="form-group">
            <label>Amount per Product : <?php echo $product_amount; ?></label>
          </div>
          <div class="form-group">
            <label>Total Amount : <?php echo $total; ?></label>
          </div>
          <div class="form-group">
            <label>Payment : <?php echo $payment; ?></label>
          </div>
          
          
          <!--button type="submit" class="btn btn-primary">Register</button><br><br-->
          
        </form>

        <h7 style= "color: red; " >Kindly take a screenshot of this bill...</h7>
        <!--a href="secondPage.php" class="btn btn-primary">Login</a-->
        
      </div>
      
    </div>
    
  </div>
</div>



   <!--h1>
    <?php echo "$name"; ?>
    <?php echo $chest ;  ?>
    <?php echo $colours ;  ?>
    <?php echo $quantity ;  ?>
    <?php echo $length ;  ?>
    <?php echo $waist ;  ?>
    <?php echo $hip ;  ?>
    <?php echo $fneck ;  ?>
    <?php echo $bneck ;  ?>
    <?php echo $shoulder ;  ?>
    <?php echo $slength ;  ?>
    <?php echo $sbottom ;  ?>
    <?php echo $armhole ;  ?>

   </h1-->
   



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>