  <?php
require('admin/includes/connection.php');
include_once('includes/header.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> coupon || Allura Bling's</title>
<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<style type="text/css">
	body, html {
    height: 100%;
}

/* The hero image */
.hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("wood.png");

  /* Set a specific height */
  height: 100%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.hero-text {
  text-align: left;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
.coupon {
  border: 5px dotted #bbb; /* Dotted border */
  width: 50%;
  border-radius: 15px; /* Rounded border */
  margin-left: 45px; 
  max-width: 300px;
}

.container11 {
  padding: 2px 8px;
  background-color: #f1f1f1;
}

.promo {
  background: #ccc;
  padding: 3px;
}

.expire {
  color: red;
}
.splitscreen {
    display:flex;
}
.splitscreen .left {
    flex: 1;
}
.splitscreen .right {
    flex: 1;
}
	</style>
</head>

<body>

  

<br><br>
<center>
<h1>DISCOUNTS :</h1><br>

<div class="coupon">
  <div class="container11">
    <h3>ALLURA's Discount :</h3>
  </div>
  <img src="coupon.png"  style="width:100%;">
  <div class="container11" style="background-color:white">
    <h2><b>20% OFF for all item's</b></h2>
    
  </div>
  <div class="container11">
    <p>Use Promo Code: <span class="promo">B232</span></p>
    <p class="expire">Expires: Jan 03, 2021</p>
  </div>

</div>
</center>
<br><br><br><br>
<!---footer--->
<?php include_once('includes/footer.php') ?>
</body>
</html>