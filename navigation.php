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
<body style="background-color: purple;">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<img src="logo1.png" height="5%" width="5%" />
  <a class="navbar-brand font-italic" href="home.php">F@$H!0N $T@R</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mainPage.php">Products <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Category
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="traditional.php">Traditional wear</a>
        <a class="dropdown-item" href="western.php">Western wear</a>
        <a class="dropdown-item" href="indo_western.php">Indo-Western wear</a>
        <a class="dropdown-item" href="party.php">Party Wear</a>
      </div>
    </li>
      
      <!--li class="nav-item">
        <a class="nav-link" href="indo_western.php">Indo-Western</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="party.php">Party Wear</a>
      </li--> 
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php" >Cart 🛒</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="myorders.php" >My orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="secondPage.php" >Log out</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <input class="form-control mr-sm-2" type="search" name="search_input" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>