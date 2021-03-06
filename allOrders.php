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
<?php session_start();

include 'adminNavigation.php'; ?>

<?php
  
  $con=mysqli_connect('127.0.0.1:3360','root','');

  mysqli_select_db($con, 'project');

  

?>
<h4>My orders</h4><br>
<div class="container">
  <div class="login-box">
    <div class="table table-responsive">
      <table class="table table-striped" style="background-color: white; color: black;">
        <thead>
          <tr>
            <th scope="col">Sr. no</th>
            <th scope="col">Username</th>
            <th scope="col">Order id</th>
            <th scope="col">Product id</th>
            <th scope="col">Colour</th>
            <th scope="col">Quantity</th>
            <th scope="col">Amount per product</th>
            <th scope="col">Dispatched</th>
          </tr>
        </thead>
        <?php
            
            $query = " SELECT `name`, `product_id`, `color`, `quantity`, `product_amount`, `ready`, `id` FROM `dress` order by id ASC ";

            $queryfire = mysqli_query($con, $query);
            $num = mysqli_num_rows($queryfire);
            $counter = 0;
            $amount_total = 0;

            if ($num > 0) {
               while ($product = mysqli_fetch_array($queryfire)) {
                $amount_total = $amount_total +  $product['product_amount'];

            ?>
    
                <tbody>
                  <tr>
                    <th scope="row"><?php echo ++$counter; ?></th>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['product_id']; ?></td>
                    <td><?php echo $product['color']; ?></td>
                    <td><?php echo $product['quantity']; ?></td>
                    <td>&#8377;<?php echo $product['product_amount']; ?></td>
                    <td><?php echo $product['ready']; ?></td>
                  </tr>
                  
                </tbody>

          <?php
      }
    }
    ?>
    <tfoot>
      <tr>
        <th colspan="6">Total amount earned till date</th>
        <th colspan="2">  &#8377; <?php echo $amount_total; ?></th>
      </tr>
    </tfoot>
      </table>
  </div>
  </div>
  </div>
  
  


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>