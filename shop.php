<?php
//session_start();
require_once('admin/includes/connection.php');
include_once('includes/header.php');

 
$query = "SELECT * FROM category";
 $result = mysqli_query($conn , $query);
 if (!isset($_SESSION['cartt'])) {
     $_SESSION['cartt'] = array();

 }
 if (isset($_POST['addtocart'])) {
    
     array_push($_SESSION['cartt'],$_GET['id']);
     
 }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Bedroom|| Allura Bling's</title>
<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<style type="text/css">
 
</style>
</head>


        


<!-----featured product----->
<div class="small-container">
	<?php if (isset($_GET['id'])) {
                            $query = "SELECT * FROM category WHERE cat_id='{$_GET['id']}'";
                            $result = mysqli_query($conn , $query);
                            $out=mysqli_fetch_assoc($result);
                             echo "<h2 class='title'>{$out['cat_name']}</h2>";}
                             else
                             	echo '<h2 class="title">Products</h2>';
                             ?>
                            

      <div class="row">
      	<?php
                            if (isset($_GET['id'])) {
                                    $query = "SELECT * FROM product WHERE cat_id='{$_GET['id']}'";
                                    $result = mysqli_query($conn , $query);
                                    while ($pro = mysqli_fetch_assoc($result)) {
       echo '<div class="col-4">';
        echo "<img  src='admin/img/{$pro['product_img']}' height='75%' width='75%'>";
        echo '<div >';
        echo "<h2>{$pro['product_name']} </h2>";
        echo "<h4>{$pro['product_details']} </h4>";
      echo "<h4>{$pro['product_price']} </h4>"; 
      //echo'<a href=" " class="btn"> Add To cart</a>';
      echo "<form action='cart.php?id={$pro['product_id']}' method='post'>
                                            <input type='submit' name='addtocart' value='Add to Cart' class='btn essence-btn'>
                                                </form>";
       echo " </div>";
       echo" <h4></h4>";
       echo"</div>";}}
       elseif (isset($_GET['shop'])) {
                                    $query = "SELECT * FROM product";
                                    $result = mysqli_query($conn , $query);
                                    while ($pro = mysqli_fetch_assoc($result)) {
                                      echo '<div class="col-4">';
        echo "<img  src='admin/img/{$pro['product_img']}' height='75%' width='75%'>";
        echo '<div >';
        echo "<h2>{$pro['product_name']} </h2>";
        echo "<h4>{$pro['product_details']} </h4>";
      echo "<h4>{$pro['product_price']} </h4>"; 
      //echo'<a href=" " class="btn"> Add To cart</a>';
      echo "<form action='cart.php?id={$pro['product_id']}' method='post'>
                                            <input type='submit' name='addtocart' value='Add to Cart' class='btn essence-btn'>
                                                </form>";
       echo " </div>";
       echo" <h4></h4>";
       echo"</div>";
     }}
       ?>
        

       
       </div>
       







       </div>
  </div>
</div>

<br><br><Br>
                                         <a href="product.php" class="btn">Back</a>

<br><br><br>
<br><br><br><br><br><br>
<?php include_once('includes/footer.php') ?>
</body>
</html>