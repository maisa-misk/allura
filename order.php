<?php
ob_start();
require_once('admin/includes/connection.php');
include_once('includes/header.php');
$total=0;
$tot=0;
$array =array();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>Delivery service|| Allura Bling's</title>
<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <style type="text/css">
body {
  font-family: "Nunito", sans-serif;
  color: #333;
  font-weight: 300;
  line-height: 1.6; 
 
}</style>
</head>
<style type="text/css">
  body, html {
    height: 100%;
}

/* The hero image */
.hero-image {
 
  background-image: url("two-ikea-co-workers-leaning-over-a-wooden-frame-they-are-bot-6acd9b8e7d70eebc402c1df9c424f172.webp");
border-radius: 30px;   
  height: 100%; border: .1px solid black;
}
.hero-text {
  margin: 50px;
  background-color: #ffffff;
  opacity: 0.6;
}

  </style>
</head>

<body>

  <style>
table.GeneratedTable {
  width: 100ch;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #07205a;
  border-style: solid;
  color: #031363;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: #07205a;
  border-style: solid;
  padding: 3px;
}

table.GeneratedTable thead {
  background-color: #a8b2d7;
}
</style>
<br><br><br><br><br><br>
<form class="checkout-form" method="POST">
<?php 

 

echo "<center><table class='GeneratedTable'>";
  echo "<thead>";
    echo "<tr>";
      echo "<th>First name</th>";
      echo "<th>Last name</th>";
      echo "<th>E-mail</th>";
      echo "<th>Phone</th>";
      echo "<th>Name on Card</th>";
      echo "<th>Credit card number</th>";
      echo "<th>total</th>";
       

    echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
    echo "<tr>";
     if($user!=""){
            $query = "SELECT * FROM customer WHERE customer_id = {$_SESSION['log']}";
                  $result = mysqli_query($conn,$query);
                while($cus = mysqli_fetch_assoc($result)){
      echo "<td>{$cus['first_name']}</td>";
      echo "<td>{$cus['last_name']}</td>";
      echo "<td>{$cus['email']}</td>";
      echo "<td>{$cus['phone']}</td>";
      echo "<td>{$cus['card_name']}</td>";
      echo "<td>{$cus['card_num']}</td>";
      foreach ($_SESSION['cartt'] as $key => $value ) {
                      $cart= $_SESSION['cartt'][$key];
                      $arr=explode(",",$cart);
                      $id=$arr[0];
                      
                      $query1="SELECT * FROM product where product_id=$id";

                        $result1=mysqli_query($conn,$query1);
                      $product=mysqli_fetch_assoc($result1);    
                      
                      
                        $new=$product['product_price'];
                       $tot=$tot+$new;
                   $total=$tot+10;
            
                    }
      echo "<td>$total</td>";
      }}
    echo "</tr>";
  echo "</tbody>";

echo "</table></center>";




                    
if (isset($_POST['placeorder'])){
 $qrr2=" INSERT INTO `order`(`customer_id`, `total`) VALUES ('$_SESSION[log]','$total')";

                        // $qrr2 ="INSERT INTO order (customer_id, total) 
                          // VALUES ('$_SESSION[log]','$total')";
                          
                         mysqli_query($conn, $qrr2);

                         
                           

                         unset($_SESSION['cartt']);
                         header("location:order.php");

                    }



?>


<center><button class="site-btn btn-full" id="btn" name="placeorder">Place Order</button></center>
<br><br><br><br><br>
</form>

<center>     <h4><a href="cart.php" class="btn"> Back to cart</a>
</center>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<?php include_once('includes/footer.php') ?>
</body>
</html>