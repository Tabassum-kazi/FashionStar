<!DOCTYPE html>
<html>
<head>
	<title>
		My fashion star
	</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	
  	
</head>
<body background="images\background-cardpage.jpg" style="background-attachment: fixed; color: white; background-repeat: no-repeat;background-size: cover;">
	<?php 
    session_start();
    

    $con=mysqli_connect('127.0.0.1:3360','root','');

    mysqli_select_db($con, 'project');


    $id = $_POST['id_num'];

     $query = " SELECT * FROM `seemore` where id ='$id' order by id ASC ";
     $queryfire = mysqli_query($con, $query);
    $num = mysqli_num_rows($queryfire);

    if ($num > 0) {
       while ($product = mysqli_fetch_array($queryfire)) {
    ?>
	

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<img src="logo1.png" height="5%" width="5%" />
  <a class="navbar-brand font-italic" href="#">F@$H!0N $T@R</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    
  </div>
</nav>

<div class="container">
	<div class="login-box">
		<div class="row">
			<div class="col-md-6">
				<h2> Update Here</h2>
				<form action="update.php" method="post">
					<div class="form-group">
						<label>Product id</label>
						<input type="text" name="id" class="form-control" required="true" value="<?php echo $id; ?>" readonly >
					</div>
					<div class="form-group">
						<label>Path</label>
						<input type="text" name="path" class="form-control" required="true" placeholder="folder\\folder2\\filename.jpg">
					</div>
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control" required="true" value="<?php echo $product['title']; ?>">
						
					</div>
					<div class="form-group">
						<label>Amount</label>
						<input type="number" name="amount" class="form-control" required="true" value="<?php echo $product['amount']; ?>">
						
					</div>
					<div class="form-group">
						<label>Category</label>
						<input type="text" name="category" class="form-control" required="true" value="<?php echo $product['category']; ?>">
						
					</div>
					<div class="form-group">
						<label>Path2</label>
						<input type="text" name="path2" class="form-control" required="true" placeholder="folder\\folder2\\filename.jpg">
						
					</div>
					<div class="form-group">
						<label>Path3</label>
						<input type="text" name="path3" class="form-control" required="true" placeholder="folder\\folder2\\filename.jpg">
						
					</div>
					<div class="form-group">
						<label>Path4</label>
						<input type="text" name="path4" class="form-control" required="true" placeholder="folder\\folder2\\filename.jpg">
						
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" name="description" class="form-control" required="true" value="<?php echo $product['description']; ?>">
						
					</div>
					<div class="form-group">
						<label>Care instruction 1</label>
						<input type="text" name="ci1" class="form-control" required="true" value="<?php echo $product['ci1']; ?>">
						
					</div>
					<div class="form-group">
						<label>Care instruction 2</label>
						<input type="text" name="ci2" class="form-control" required="true" value="<?php echo $product['ci2']; ?>">
						
					</div>
					<div class="form-group">
						<label>Care instruction 3</label>
						<input type="text" name="ci3" class="form-control" required="true" value="<?php echo $product['ci3']; ?>">
						
					</div>
					<div class="form-group">
						<label>Color1</label>
						<input type="text" name="color1" class="form-control" required="true" value="<?php echo $product['color1']; ?>">
						
					</div>
					<div class="form-group">
						<label>Color2</label>
						<input type="text" name="color2" class="form-control" required="true" value="<?php echo $product['color2']; ?>">
						
					</div>
					<div class="form-group">
						<label>Color3</label>
						<input type="text" name="color3" class="form-control" required="true" value="<?php echo $product['color3']; ?>">
						
					</div>
					<div class="form-group">
						<label>Color4</label>
						<input type="text" name="color4" class="form-control" required="true" value="<?php echo $product['color4']; ?>"><br>
						
					</div>

					<button type="submit" class="btn btn-primary">Update</button><br><br>
					
				</form>
				
				
			</div>
			
		</div>
		
	</div>
</div>
<?php
       }
     } 
?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>