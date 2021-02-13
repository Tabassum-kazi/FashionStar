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


  <section class="my-5"> 
  <div class="container-fluid" style="height: 10px;">
    <div class="row" style="width: 100%;color: black;">

  <?php
    
    $con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');
    $table_name = $_SESSION['username'];
    //echo $table_name;
    $amount_total = 0; //total of all products;

    $query = " SELECT  `item_id` , `quantity` ,`total_price` FROM $table_name order by id ASC ";
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

        <div class="col-lg-3 col-md-3 col-12 pb-5" >
          <form action="cartDelete.php" method="post">
          <div class="card">
            <div class="inner">
              <img class="card-img-top" src="<?php echo $product_1['path']; ?>" alt="Card image"  height="400px">
            </div>
            <div class="card-body">
              <label class="card-title"><?php echo $product_1['title']; ?></label>
              <p class="card-text"> &#8377; <?php echo $product_1['amount']; ?></p>
              <p class="card-text">Quantity: <?php echo $product['quantity']; ?></p>
              <?php $amount_total = $amount_total + $product['total_price']; ?>
              <input type="hidden" name="ctitle" value="<?php echo $product_1['title']; ?>">
              <input type="hidden" name="camount" value="<?php echo $product_1['amount']; ?>">
              <input type="hidden" name="cpath" value="<?php echo $product_1['path']; ?>">
              <input type="hidden" name="id_num" value="<?php echo $product_1['id']; ?>">
              
            </div>
            <div class="btn-group d-flex">
              <button class="btn btn-primary flex-fill" type="submit">Remove from cart</button>
              <button class="btn btn-success flex-fill" type="submit" formaction="item.php">BUY</button>
            </div>
          </div>
          
        </div>

         <?php
       }
     }
   }
 }
     else
     {?>
      <div style="color: white;">
        <?php echo "No item here!!!";?>
      </div><?php
     } 


     
?>  

</div>
<div class="btn-group d-flex">
  <button class="btn btn-warning flex-fill" type="submit">Total amount: <b><?php echo $amount_total ; ?></b> </button>
  <button class="btn btn-success flex-fill" type="submit" formaction="buyAll.php">BUY ALL</button>
</div>
 </form> 

<?php include 'footer.php'; ?>
</div>
  
</div>
</section>















  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>