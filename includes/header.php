<?php
require('admin/includes/connection.php');
session_start();
if (!isset($_SESSION['cartt'])) {
     $_SESSION['cartt'] = array();}
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
 if (isset($_POST['removecart'])) {
     $id=$_POST['removecart'];
     unset($_SESSION['cartt'][$id]);
     
 }
?>
<!doctype html>
<html>
<head>
  
<meta charset="utf-8">
<title>Allura Bling's</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                </div>
                            </div>