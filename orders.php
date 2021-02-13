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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body background="images\background-cardpage.jpg" style="background-attachment: fixed; color: white; background-repeat: no-repeat;background-size: cover;">

  <!-- including navigation bar to the page -->
<?php include 'adminNavigation.php'; ?>


  <section class="my-5"> 
  <div class="container-fluid" style="height: 10px;">
    <div class="row" style="width: 100%;color: black;">

  <?php
    $con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');

    $query = " SELECT `id`, `name`, `product_id`, `phone` FROM `delivery` where delivered = 'No'order by id ASC ";
    $queryfire = mysqli_query($con, $query);
    $num = mysqli_num_rows($queryfire);

    if ($num > 0) {
       while ($product = mysqli_fetch_array($queryfire)) {
         ?>

        <div class="col-lg-3 col-md-3 col-12 pb-5" >
          <form action="dispatch.php" method="post">
          <div class="card">
            
            <div class="card-body">
              <label class="card-title">Order id : <?php echo $product['id']; ?></label>
              <p class="card-text"> Name: <?php echo $product['name']; ?></p>
              <p class="card-text"> Product id: <?php echo $product['product_id']; ?></p>
              <p class="card-text"> Phone number: <?php echo $product['phone']; ?></p>
              <input type="hidden" name="order_id" value="<?php echo $product['id']; ?>">
              <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
              <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
              <input type="hidden" name="phone_number" value="<?php echo $product['phone']; ?>">
              
              
            </div>
            <div class="btn-group d-flex">
              <button class="btn btn-success" type="submit">Dispatch</button>
              
            </div>
          </div>
          </form>
        </div>


         <?php
       }
     }
     else
     {
      ?>
      <div style="color: white;">
        <?php echo "No item here!!!";?>
      </div>
      <?php
     }



     
?>
  

</div>

</div>
</section>















  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>