<?php
session_start();
require_once('admin/includes/connection.php');



 if (!isset($_SESSION['cartt'])) {
     $_SESSION['cartt'] = array();

 }
 if (!isset($_SESSION['log'])) {
  header("location: cus_login.php");
  $user = "";
}
else {
  $user = $_SESSION['log'];
 $query= "SELECT * FROM customer ";
$result = mysqli_query($conn,$query);
   
    while($cus = mysqli_fetch_assoc($result)){
      $user = $cus['customer_id'];
    }

}
 if (isset($_POST['addtocart'])) {
    
     array_push($_SESSION['cartt'],$_GET['id']);
     
 }
 if (isset($_POST['removecart'])) {
     $id=$_POST['removecart'];
     unset($_SESSION['cartt'][$id]);
     
 }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Cart || Allura Bling's</title>
<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<style type="text/css">

.cart-page{
  margin: 80px auto; 
}
table{
  width: 100%;
  border-collapse: collapse;
}
.cart-info{
  display: flex;
  flex-wrap: wrap;

}
th{
  text-align: left;
  padding: 5px;
  color: #fff;
  background:#0D1E9C ;
  font-weight: normal;
}
td{
  padding: 20px 10px;
}
td input{
  width: 40px;
  height: 30px;
  padding: 5px;
}
td a{
  color:#0D1E9C;
  font-size: 12px;
}
td img{
  margin-right: 30px;
}
.total-price{
  display: flex;
  justify-content: flex-end;
}
.total-price table{
  border-top: 3px solid #0D1E9C;
  width: 100%;
  max-width: 350px;

}

td:last-child{
  text-align: center;
}
th:last-child{
  text-align: center;
}













  </style>
</head>
<body>
<div class="header">

  <div class="conatiner">
    <div class="navbar">
       <div class="logo">
          <img src="logo.png" width="125px">
       </div>
       <nav>
            <ul id="Menuitems"> 
              <li><a href="index.php"> Home </a></li>
              <li><a href="product.php"> Products </a></li>
              <li><a href="about.php"> About </a></li>
              
              <li><a href="cart.php"> Account </a></li>
              <li><a href="cus_logout.php"> LogOut </a></li>
            </ul>

       </nav>
       <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="image/cart.png" width="30px" height="30px" alt=""> <span>
                    <?php
                      
                     $i =count($_SESSION['cartt']);

                      
                      echo $i;
                    
                    ?>
                    </span></a>
                </div>
       <img src="menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
 </div>
</div>
  <div class="header-button">
                        
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"> <?php
          if($user!=""){
            $query = "SELECT * FROM customer WHERE customer_id = {$_SESSION['log']}";
                  $result = mysqli_query($conn,$query);
                while($cus = mysqli_fetch_assoc($result)){

                   echo 'Welcome '.$cus['first_name'] . '!';}
                  echo " </h5>";}
          ?></a>
                                      
                                                
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>

       
<!-- cart detalis--->

 <div class='small-contanier cart-page'>
   <?php
                               echo "<table>";
     echo "<tr>";
        echo "<th>Product</th>";
        echo "<th>Quantity</th>";
        echo "<th>Total</th>";
    echo  "</tr>";
   
                      if (isset($_SESSION['cartt'])) {
                        $total = 0;
                        foreach ($_SESSION['cartt'] as $key => $value) {
                            $query1 = "SELECT * FROM product WHERE product_id = $value";
                            $result1 = mysqli_query($conn , $query1);
                            $m = mysqli_fetch_assoc($result1);
                            $total = $total +$m['product_price'];
                            $tot_tax= $total + 10 ;

     echo "<tr>";
       echo "<td>";
         echo "<div class='cart-info'>";
           echo "<img src='admin/img/{$m['product_img']}' width= '250 px' height= '250 px' >";
           //{$m['product_price']}
           echo "<div>
             <p>{$m['product_name']}</p>";
             echo "<small>{$m['product_price']}</small>";
             echo "<br>";
             echo "<form method= 'post'>";
             echo "<button type='submit' name='removecart' value='$key' class='product-remove' <a href= 'cart.php?{$m['product_id']}'>remove</a></button>";
             echo "</form>";
           echo "</div>";
         echo "</div>";
       echo "</td>";
       echo "<td><input type='number' value='1'></td>";
       echo "<td>{$m['product_price']}</td>";
     echo "</tr>";}}
     
     //echo "<tr>";

   echo "</table>";
   echo "</div>";

echo "<div class='total-price'>
  <table>
    <tr>
      <td>Total price</td>
      <td>$total</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>10 JD</td>
    </tr>
    <tr>
      <td>Total</td>
      <td>$tot_tax</td>
    </tr>
  </table>
</div>";


?>



 </div>
<?php
$query = "SELECT * FROM customer";
                 $result = mysqli_query($conn ,$query);
                 $cus = mysqli_fetch_assoc($result);

                  echo "<center>     <h4><a href='order.php?id={$cus['customer_id']}' class='btn'> check the order</a>
                    </center>";
                 
                  ?>





<!-- single product detalis--->
<!-----footer----->
<br><br><br>
<br><br><br>
<br><br><br><br><br><br>
<a href="product.php" class="btn">Back</a>

<?php include_once('includes/footer.php') ?>
</body>
</html>