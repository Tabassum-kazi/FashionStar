<!DOCTYPE html>
<html>
<head>
  <title>
    Traditional wear
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
<?php include 'navigation.php'; ?>


  <section class="my-5"> 
  <div class="container-fluid" style="height: 10px;">
    <div class="row" style="width: 100%;color: black;">

  <?php
    $con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');

    $query = " SELECT `path`, `title`, `amount`, `navpath`, `id` FROM `seemore` where category='indian' order by id ASC ";
    $queryfire = mysqli_query($con, $query);
    $num = mysqli_num_rows($queryfire);

    if ($num > 0) {
       while ($product = mysqli_fetch_array($queryfire)) {
         ?>

        <div class="col-lg-3 col-md-3 col-12 pb-5" >
          <form action="buyLater.php" method="post">
          <div class="card">
            <div class="inner">
              <img class="card-img-top" src="<?php echo $product['path']; ?>" alt="Card image"  height="400px">
            </div>
            
            <div class="card-body">
              <label class="card-title"><?php echo $product['title']; ?></label>
              <p class="card-text"> &#8377; <?php echo $product['amount']; ?></p>
              <input type="hidden" name="cimage" value="<?php echo $product['path']; ?>">
              <input type="hidden" name="ctitle" value="<?php echo $product['title']; ?>">
              <input type="hidden" name="camount" value="<?php echo $product['amount']; ?>">
              <input type="hidden" name="cpath" value="<?php echo $product['navpath']; ?>">
              <input type="hidden" name="id_num" value="<?php echo $product['id']; ?>">
              
            </div>
            <div class="btn-group d-flex">
              <button class="btn btn-primary flex-fill" type="submit">BUY LATER</button>
              <button class="btn btn-success flex-fill" type="submit" formaction="item.php">BUY NOW</button>
            </div>
          </div>
          </form>
        </div>


         <?php
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
  <?php include 'footer.php'; ?>
</div>
</section>















  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>