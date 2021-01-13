<?php
ob_start();
include_once('includes/header.php');
require('includes/connection.php');
if(isset($_POST['submit'])){
   $catname =  $_POST['name'];
$query = "INSERT INTO category (cat_name)
         values('$catname')";
         mysqli_query($conn,$query);
         header("Location: manage_category.php");
}
if(isset($_POST['submit1'])){
 
   $catname =  $_POST['name'];
   $query = "UPDATE category SET cat_name = '$catname'
                       where cat_id = {$_GET['id']}";
         mysqli_query($conn, $query);
         header("Location: manage_category.php");

   }
   if(isset($_GET['id1'])) {
     $query = "DELETE FROM category where cat_id = {$_GET['id1']}";
mysqli_query($conn,$query);
header("Location: manage_category.php");
}

if (isset($_GET['id'])) {


  $query = " SELECT * from category where cat_id = {$_GET['id']}";
$result = mysqli_query($conn, $query);
$category = mysqli_fetch_assoc($result);
}

  ?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Manage Category</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                          <?php 
                                             if (isset($_GET['id'])) {
                                              echo "<h4><i class='fa fa-angle-right'></i> Edit category</h4>";}
                                               elseif (!isset($_GET['id'])) {echo "<h4><i class='fa fa-angle-right'></i> Create category</h4>";}
            ?>
                                           
                                        </div>
                                        <hr>
                                        <form action="" method="post" >
                                            
                                            <div class="form-group ">
                                                <label for="cc-number" class="control-label mb-1">Category Name</label>
                                                <input id="cc-number" name="name" type="text" class="form-control cc-number identified visa" value="<?php if (isset($_GET['id'])) { echo $category['cat_name'];} ?>" >
                                                
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
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                          $query = "SELECT * from category";
                                          $result = mysqli_query($conn , $query);
                                         while($cat = mysqli_fetch_assoc($result)){
                                         echo '<tr>';
                                         echo "<td>{$cat['cat_id']}</td>";
                                         echo "<td>{$cat['cat_name']}</td>";
                                         echo "<td><a href='manage_category.php?id={$cat['cat_id']}' 
                                           class='btn btn-warning'> EDIT </a ></td>";
                                           echo "<td><a href='manage_category.php?id1={$cat['cat_id']}' 
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