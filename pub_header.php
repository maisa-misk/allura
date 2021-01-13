<?php
$path = "../admin/images/";
if (isset($_POST['addtocart'])) {
    
     array_push($_SESSION['cart'],$_GET['id']);
     
 }
 if (isset($_POST['removecart'])) {
     $id=$_POST['removecart'];
     unset($_SESSION['cart'][$id]);
     
 }
 
?>
