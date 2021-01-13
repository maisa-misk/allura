<?php
ob_start();
include_once('includes/header.php');
require('includes/connection.php');
if(isset($_POST['submit'])){
  $image_name = $_FILES['img']['name'];
   $tmp_name = $_FILES['img']['tmp_name'];
   $path = 'img/';
   //move files to images folder
   move_uploaded_file($tmp_name, $path.$image_name);
   $prodname     =  $_POST['name'];
   $prodprice    =  $_POST['price'];
   $prod_details     =  $_POST['details'];
   $select       =  $_POST['select'];
$query = "INSERT INTO product (product_name,product_img,product_price,product_details,cat_id)
         values('$prodname','$image_name','$prodprice','$prod_details','$select')";
         mysqli_query($conn,$query);
         header("location:manage_product.php");
}
if(isset($_POST['submit1'])){
 
  $image_name = $_FILES['img']['name'];
   $tmp_name = $_FILES['img']['tmp_name'];
   $path = 'img/';
   //move files to images folder
   move_uploaded_file($tmp_name, $path.$image_name);
   $prodname     =  $_POST['name'];
   $prodprice    =  $_POST['price'];
   $prod_details     =  $_POST['details'];
   $select       =  $_POST['select'];
   $query2 = "UPDATE product SET product_name = '$prodname',
                            product_price = '$prodprice',
                            product_details  = '$prod_details',
                            product_img   = '$image_name',
                            cat_id      = '$select'
                           
                         where product_id = {$_GET['id']}";
         mysqli_query($conn, $query2);
         header("location: manage_product.php");

   }
   if(isset($_GET['id1'])) {
     $query = "DELETE FROM product where product_id = {$_GET['id1']}";
mysqli_query($conn,$query);
header("Location: manage_product.php");
}

if (isset($_GET['id'])) {


  $query = " SELECT * from product where product_id = {$_GET['id']}";
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);
}

  ?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Manage Product</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                          <?php 
                                             if (isset($_GET['id'])) {
                                              echo "<h4><i class='fa fa-angle-right'></i> Edit Product</h4>";}
                                               elseif (!isset($_GET['id'])) {echo "<h4><i class='fa fa-angle-right'></i> Create Product</h4>";}
            ?>
                                           
                                        </div>
                                        <hr>
                                        <form action="" method="post" enctype="multipart/form-data" >
                                            
                                            <div class="form-group ">
                                                <label for="cc-number" class="control-label mb-1">Product Name</label>
                                                <input id="cc-number" name="name" type="text" class="form-control cc-number identified visa" value="<?php if (isset($_GET['id'])) { echo $product['product_name'];} ?>" >
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Product price</label>
                                                <input id="cc-number" name="price" type="text" class="form-control cc-number identified visa" value="<?php if (isset($_GET['id'])) {echo $product['product_price'];} ?>" >
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Product Image</label>
                                                <input id="cc-number" name="img" type="file" class="form-control cc-number identified visa" value="<?php if (isset($_GET['id'])) { echo $image_name; ?>"  /><img src="img/<?php echo $product['product_img'];} ?>" />
                                                
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Product details</label>
                                                <input id="cc-number" name="details" type="text" class="form-control cc-number identified visa" value="<?php if (isset($_GET['id'])) {echo $product['product_details'];} ?>" >
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Category Name</label>
                                                 <div class="col-lg-6">
                      <select  name="select" type="text" class="form-control cc-number identified visa" value="" >
                                                    <?php
                                                    $q= "SELECT * from category where cat_id = {$product['cat_id']}";
                                                    $rs = mysqli_query($conn,$q);
                                                    $r= mysqli_fetch_assoc($rs);
                                                    echo "<option>";
                                                    echo $r['cat_name'];
                                                    echo "</option>";
                                                    $query2 = "SELECT *from category";
                                                    $result2 = mysqli_query($conn,$query2);
                                                    while ($cat = mysqli_fetch_assoc($result2)) {
                                                    if ($product['cat_name']!=$r['cat_name']) {
                                                        echo "<option>".$product['cat_name']."</option>";
                                                    }
                                                    
                                                    
                                                     echo"<option value='$cat[cat_id]'>$cat[cat_name]</option>";
                                                    
                                                 }
                                                 ?>
                                               </select>
                    </div>
                                                
                                            </div>
                                            
                                           <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <?php
                        if (isset($_GET['id'])) {
                          echo "<input id='payment-button' type= 'submit' name= 'submit1' class='btn btn-lg btn-info'  value='edit'>
                            </input>";
                        }
                         else if (!isset($_GET['id'])) {
                          echo "<input type= 'submit'  name= 'submit' class='btn btn-lg btn-info'  value='create'>
                            </input>";
                        }
                        ?>
                    </div>
                  </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Price</th>
                                                <th>Details</th>
                                                <th>category name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                          $query = "SELECT * from product";
                                          $result = mysqli_query($conn , $query);
                                         $query2 = "SELECT cat_name from category INNER join product ON category.cat_id = product.cat_id ";
                                         $result2 = mysqli_query($conn,$query2);
                                        
                                         while($product = mysqli_fetch_assoc($result)){
                                             $categoryname = mysqli_fetch_assoc($result2);
                                         echo '<tr>';
                                         echo "<td>{$product['product_id']}</td>";
                                         echo "<td>{$product['product_name']}</td>";
                                         echo "<td><img src='img/{$product['product_img']}' width='120' height='120'></td>";
                                         echo "<td>{$product['product_price']}</td>";
                                         echo "<td>{$product['product_details']}</td>";
                                         echo "<td>{$categoryname['cat_name']}</td>";
                                         echo "<td><a href='manage_product.php?id={$product['product_id']}' 
                                           class='btn btn-warning'> EDIT </a ></td>";
                                           echo "<td><a href='manage_product.php?id1={$product['product_id']}' 
                                           class='btn btn-danger'> Delete </a ></td>";
                                            
                                         echo "</tr>";
                                         }
                                         ?> 
                                        </tbody>
                                    </table>
                                </div>

                                <!-- END DATA TABLE-->
                        </div>
                    </div>
                </div>

<?php include_once('includes/footer.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

</head>
</html>