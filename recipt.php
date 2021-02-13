<!DOCTYPE html>
<html>
<head>
  <title>
    Cart
  </title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styleme.css">
  
</head>
<body background="images\background-cardpage.jpg" style="background-attachment: fixed; color: white; background-repeat: no-repeat;background-size: cover;">
  <!-- including navigation bar to the page -->
<?php include 'navigation.php';
session_start();
 ?>


  
  <?php
    
    $con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');
    $table_name = $_SESSION['username'];
    ?>
    <h4>Your Booking is done!!!</h4><br>
    <h4>Thank you for buying from F@$H!0N$T@R :)</h4><br>
    <div class="container">
      
        <div class="table table-responsive">
          <table class="table table-striped" style="background-color: white; color: black;">
            <thead>
              <tr><th colspan="5"> BILL</th>
                </tr>
              <tr><th>Name </th>
                <th><?php echo $table_name; ?></th></tr>
            </thead>
            <tr>
                <th scope="col">Sr. no</th>
                <th scope="col">Product id</th>
                <th scope="col">Quantity</th>
                <th scope="col">Amount per product</th>
                <th scope="col">Total</th>
              </tr>

            <?php
            $name = $_POST['name'];
            $date = $_POST['date'];
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
            //echo $table_name;

            $amount_total = 0; //total of all products;

            $counter = 0;
            $payment = " " ;
            if ($utr_number == 00000) {
              $payment .= "COD";
            } else {
              $payment .= "DONE";
            }

            $query = " SELECT  * FROM $table_name order by id ASC ";
            $queryfire = mysqli_query($con, $query);
            $num = mysqli_num_rows($queryfire);

            if ($num > 0) {
               while ($product = mysqli_fetch_array($queryfire)) {
                $query_1 = " SELECT  * FROM `seemore` where id = '" .$product['item_id']. "' ";
                $queryfire_1 = mysqli_query($con, $query_1);
                $num_1 = mysqli_num_rows($queryfire_1);
                if ($num_1 > 0) {
                while ($product_1 = mysqli_fetch_array($queryfire_1)) {
                 ?>
                  <tbody>
                  <tr>
                    <th scope="row"><?php echo ++$counter; ?></th>
                    <td><?php echo $product['item_id']; ?></td>
                    <td><?php echo $product['quantity']; ?></td>
                    <td>&#8377;<?php echo $product['product_price']; ?></td>
                    <td><?php echo $product['total_price']; ?></td>
                  </tr>
                  
                </tbody>
                <?php
                $amount_total = $amount_total + $product['total_price'];

                $query_1 = " insert into dress (name, product_id, color, quantity, product_amount, full_length, chest, waist, hip, front_neck, back_neck, shoulder, sleeves_length, sleeves_bottom, armhole) values ('$name','" .$product['item_id']. "','" .$product['color']. "','" .$product['quantity']. "','" .$product['product_price']. "', '" .$product['full_length']. "','" .$product['chest']. "','" .$product['waist']. "','" .$product['hips']. "','" .$product['f_neck']. "','" .$product['b_neck']. "','" .$product['shoulder']. "','" .$product['sleeves_length']. "','" .$product['sleeves_bottom']. "','" .$product['armhole']. "') ";
                $query_2 = " insert into delivery (date, name, product_id, utr_no, email, phone, pin_code, flat_no, colony, landmark, state, city, country)  values ('$date','$name','" .$product['item_id']. "','$utr_number','$email','$phone_number','$pin_code','$flat_number','$colony','$landmark','$state','$city','$country') ";
                
                mysqli_query($con, $query_1);
                mysqli_query($con, $query_2);
                

       }
     }
   }
 }
 ?>    
<tfoot>
  <tr>
    <?php $query_3 = "delete from $table_name";
    mysqli_query($con, $query_3);
    ?>
        <th colspan="3">Total amount spend till date</th>
        <th > &#8377; <?php echo $amount_total; ?></th>
        <th><?php echo $payment; ?></th>
      </tr>
      <tr>
        <th colspan="5" style="color: red;">Kindly take a screen shot of this bill !!!</th>
      </tr>
    </tfoot>
      </table>
     
 


</div>  
</div>
</section>















  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>