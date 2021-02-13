<!DOCTYPE html>
<html>
<head>
  <title>
    My fashion star product
  </title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleItem.css">
    <style>
      #myModal3{
        align-self: center;
        animation-name: anim;
        animation-duration: 0.5s;
      }
      
      @keyframes anim {
        from{ margin-left: 750px; margin-right: 400px; margin-top: 350px; margin-bottom: 350px; height: 100px; width: 100px; }
        to{margin-left: 475px; margin-right: 120px; margin-top:3px; margin-bottom: 7px;height: 800px; width: 600px; }
      }

    </style>
  
</head>
<body background="images\background-cardpage.jpg" style="background-attachment: fixed; color: white; background-repeat: no-repeat;background-size: cover;">
  <?php 
    session_start();
    

    $con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');

    $customer_name = $_SESSION['username'];

    $id = $_POST['id_num'];

    $query = "SELECT * FROM `seemore` where id = $id order by id ASC";

    $queryfire = mysqli_query($con, $query);
    $num = mysqli_num_rows($queryfire);
    $product = mysqli_fetch_array($queryfire);
    ?>

<section class="my-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <div id="demo" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
              </ul>

              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $product['path']; ?>" alt="No more image available" style="height: 710px">
                      
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $product['path2']; ?>" alt="No more image available" style="height: 710px">
                    
                </div>

                <div class="carousel-item">
                    <img src="<?php echo $product['path3']; ?>" alt="No more image available" style="height: 710px">
         
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $product['path4']; ?>" alt="No more image available" style="height: 710px">
                    
                </div>
              </div>
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 my-5" style="color: white;">
          <h3><?php echo $product['title']; ?></h3>
          <p><?php echo $product['description']; ?></p>
          <p><b>Product id : </b><?php echo $product['id']; ?></p>
          <h4>&#8377; <?php echo $product['amount']; ?></h4>
          <br>
          <h4>Care instructions:</h4>
          <p>1. <?php echo $product['ci1']; ?><br> 2. <?php echo $product['ci2']; ?><br> 3. <?php echo $product['ci3']; ?></p>

          <form action="cartAdd.php" method="post">
            <h5>Please select the colour:</h5>
            <input type="radio" name="colours" value="<?php echo $product['color1']; ?>"  checked>
              <?php echo $product['color1']; ?> <br>
            <input type="radio" name="colours" value="<?php echo $product['color2']; ?>" >
              <?php echo $product['color2']; ?> <br> 
            <input type="radio" name="colours" value="<?php echo $product['color3']; ?>" >
              <?php echo $product['color3']; ?> <br>
            <input type="radio" name="colours" value="<?php echo $product['color4']; ?>" >
              <?php echo $product['color4']; ?> <br><br>
            Quantity: 
            <input type="number" min="1" name="quantity" value="1" required="true"><br><br>
            <!--button class="btn btn-primary" type="submit" formaction="#">Add to cart</button><br><br-->
            
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
              Add to cart
            </button>
            <!--/form-->
            <!-- The Modal -->
            <div class="modal" id="myModal3">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="color: black;">
      
                  <!-- Modal Header -->
                  <div class="modal-header">
                    
                    <label class="modal-title"> Please fill the details properly. </label>
                    <button type="button" class="close" data-dismiss="modal">×</button>

                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                    <!--form action="buy.php" method="post"-->
                      <label>Name:</label><br>
                      <input type="text" name="name" required="true" value="<?php echo $customer_name; ?>" readonly><br>
                      <label>Product ID:</label><br>
                      <input type="number" name="product_id" required="true" value="<?php echo $product['id']; ?>" readonly><br>
                      <label>Amount per product:</label><br>
                      <input type="number" name="product_amount" required="true" value="<?php echo $product['amount']; ?>" readonly><br>
                      <label>Full Length:</label><br>
                      <input type="number" min="1" name="length" placeholder="Enter full length" required="true"><br>
                      <label>Chest:</label><br>
                      <input type="number" min="1" name="chest" placeholder="Enter chest size" required="true"><br>
                      <label>Waist:</label><br>
                      <input type="number" min="1" name="waist" placeholder="Enter waist size" required="true"><br>
                      <label>Hip:</label><br>
                      <input type="number" min="1" name="hip" placeholder="Enter hip size" required="true"><br>
                      <label>Front Neck:</label><br>
                      <input type="number" min="1" name="fneck" placeholder="Enter front neck" required="true"><br>
                      <label>Back Neck:</label><br>
                      <input type="number" min="1" name="bneck" placeholder="Enter back neck" required="true"><br>
                      <label>Shoulder:</label><br>
                      <input type="number" min="1" name="shoulder" placeholder="Enter shoulder size" required="true"><br>
                      <label>Sleeves Length:</label><br>
                      <input type="number" min="1" name="slength" placeholder="Enter sleeves length" required="true"><br>
                      <label>Sleeves Bottom:</label><br>
                      <input type="number" min="1" name="sbottom" placeholder="Enter sleeves bottom size" required="true"><br>
                      <label>Armhole:</label><br>
                      <input type="number" min="1" name="armhole" placeholder="Enter armhole size" required="true"><br>
                    
                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                            Add to cart!!
                    </button>
                    
                    <!--a href="buy.php" class="btn btn-primary">Next</a-->
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                  </div>
                  
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
      
    
  </section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>