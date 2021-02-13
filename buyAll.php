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
    <link rel="stylesheet" type="text/css" href="buyAll-css.css">
  
</head>
<body background="images\background-cardpage.jpg" style="background-attachment: fixed; color: white; background-repeat: no-repeat;background-size: cover;">
  <!-- including navigation bar to the page -->
<?php 
session_start();
    
    $con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');
    $table_name = $_SESSION['username'];
    //echo $table_name;
    $amount_total = 0; //total of all products;

    $query = " SELECT  `item_id` ,`total_price` FROM $table_name order by id ASC ";
    $queryfire = mysqli_query($con, $query);
    $num = mysqli_num_rows($queryfire);

    if ($num > 0) {
       while ($product = mysqli_fetch_array($queryfire)) {

          $amount_total = $amount_total + $product['total_price'];
              
   }
 }
     
?>
<section class="my-3">
    <div class="container-fluid">
      <h2>Please fill the details properly!!!</h2>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12" style="border-style: dashed; border-color: white; background: #34495e;">
          <form action="recipt.php" method="post">
            <table>
              <br>
              <tr>
                <td>Name</td>
                <td> :<input type="text" name="name" required="true" value="<?php echo $table_name; ?>" readonly><br><br></td>
              </tr>
              <tr>
                <td>Date</td>
                <td> :<input type="date" name="date" required="true"><br><br></td>
              </tr>
              
              <tr>
                <td>UTR number</td>
                <td> :<input type="number" placeholder="enter 00000 if cod" min="0"  name="utr_number" required="true"><br><br></td>
              </tr>
              <tr>
                <td>Email address</td>
                <td> :<input type="email" name="email" required="true"><br><br></td>
              </tr>
              <tr>
                <td>Phone number</td>
                <td> :<input type="text" title="input should be a number and not greater than or less than 10 digits" pattern="[1-9]{1}[0-9]{9}" name="phone_number" required="true"><br><br></td>
              </tr>
              <tr>
                <td>Pin code</td>
                <td> :<input type="text" name="pin_code" title="input should be a number and not greater than or less than 6 digits" pattern="[1-9]{1}[0-9]{5}" required="true"><br><br></td>
              </tr>
              <tr>
                <td>Flat number</td>
                <td> :<input type="number" min="0" name="flat_number" required="true"><br><br></td>
              </tr>
            </table>
            </div>
            <div class="col-lg-6 col-md-6 col-12" style="border-style: dashed; border-color: white; background: #34495e;">
              <table>
              <tr>
                <br>
                <td>Colony/street/locality</td>
                <td> :<input type="text" name="colony" required="true"><br><br></td>
              </tr>
              <tr>
                <td>Landmark</td>
                <td> :<input type="text" name="landmark" required="true"><br><br></td>
              </tr>
              <tr>
                <td>State</td>
                <td> :<select name="state">
                  <option value="Maharashtra" selected="true">Maharashtra</option>
                  <option value="Gujrat">Gujrat</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Kashmir">Kashmir</option>
                  <option value="Hyderabad">Hyderabad</option>
                  <option value="Karela">Karela</option>
                </select><br><br></td>
              </tr>
              <tr>
                <td>City</td>
                <td> :<input type="text" name="city" required="true"><br><br></td>
              </tr>
              <tr>
                <td>Country</td>
                <td> :<select name="country">
                  <option value="India" selected="true">India</option>
                  
                  
                </select><br><br></td>
              </tr>
            </table>
                
            
          
        </div>
      </div>
    </div>
    <div class="btn-group d-flex">
      <button class="btn btn-success flex-fill" type="submit">Submit!!!</button>
    </div>
    
</form>
<div>
  &nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br> &nbsp;<br>&nbsp;<br>
</div>
<?php include 'footer.php'; ?>















  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>