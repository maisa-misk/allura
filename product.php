<?php
//session_start();
require_once('admin/includes/connection.php');
include_once('includes/header.php');

 $path = "../admin/images/";
 $query = "SELECT * FROM category";
 $result = mysqli_query($conn , $query);
if (!isset($_SESSION['cartt'])) {
     $_SESSION['cartt'] = array();
     
 }

 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>All products || Allura Bling's</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style >
.conatiner{
  max-width: 1000px;
  margin: 0 auto;
}
.footer{
  font-size: 14px;
}
.footer p{
  color: #8a8a8a;
}

.flex-container{
  display: flex;
  width:100%;
  justify-content:space-between;
}

.flex-container ul{
  padding:0;
}

.flex-container h3{
  margin:0;
}

.flex-container > div{

}

</style>
</head>

<body >


	
	  
<br>
<br>

<br>

<center>
  <h2 style=" text-shadow: 1px 1px  orange; color: black"> Shop By Room </h2>
  <?php
                 $query = "SELECT * FROM category";
                 $result = mysqli_query($conn ,$query);
                 while ($cat = mysqli_fetch_assoc($result)) {
  

  echo"<p><a href='shop.php?id={$cat['cat_id']}'><h3 style=' text-decoration: underline'>{$cat['cat_name']}</h3></a></p>";
  echo "<br>";
echo "<br>";
 }
?>


</center>
<br><br><br>
<br><br><br>
<br><br><br>


 <!-----footer----->
 <br><br><br>
<br><br><br>
<br><br><br><br><br><br>
<?php include_once('includes/footer.php') ?>
</body>
</html>