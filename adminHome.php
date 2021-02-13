<!DOCTYPE html>
<html>
<head>
  <title>
    Home fashion star
  </title>
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .container {
  overflow: hidden;
  
}
.photo {
  left: 0px;
  position: absolute; 
  animation: round 16s infinite;
  opacity: 0;
}
@keyframes round {
  25% {
    opacity: 1;
  }
  40% {
    opacity: 0;
  }
}
-webkit-@keyframes round {
  25% {
    opacity: 1;
    -webkit-opacity: 1;
  }
  40% {
    opacity: 0;
    -webkit-opacity: 0;
  }
}
img:nth-child(1) {
  animation-delay: 12s;
}
img:nth-child(2) {
  animation-delay: 8s;
}
img:nth-child(3) {
  animation-delay: 4s;
}
img:nth-child(4) {
  animation-delay: 4s;
}
img:nth-child(5) {
  animation-delay: 5s;
}
img:nth-child(6) {
  animation-delay: 0s;
}
  </style>
</head>
<body background="images\background-cardpage.jpg" style="background-attachment: fixed; color: white; background-repeat: no-repeat;background-size: cover;">


  <!-- including navigation bar to the page -->
<?php include 'adminNavigation.php'; ?>
  <div class="container">
  <img class='photo'  src="images\about\about1.jpeg" alt="Image 1" style="width: 1535px !important; height: 661px;" />
  <img class='photo'  src="images\about\about2.jpeg" alt="Image 2" style="width: 1535px !important; height: 661px;"/>
  <img class='photo'  src="images\about\about4.jpeg" alt="Image 3" style="width: 1535px !important; height: 661px;" />
  <img class='photo'  src="images\about\about6.jpeg" alt="Image 4" style="width: 1535px !important; height: 661px;" />
  <img class='photo'  src="images\about\about4.jpeg" alt="Image 3" style="width: 1535px !important; height: 661px;" />
  <img class='photo'  src="images\about\about5.jpeg" alt="Image 4" style="width: 1535px !important; height: 661px;" />
</div>






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>