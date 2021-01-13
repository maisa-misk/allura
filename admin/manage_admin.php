<?php
ob_start();
include_once('includes/header.php');
require('includes/connection.php');
if(isset($_POST['submit'])){
   $fullname =  $_POST['name'];
   $email    =  $_POST['email'];
   $password =  $_POST['password'];
$query = "INSERT INTO admin (admin_name,admin_email,admin_pass)
         values('$fullname','$email','$password')";
         mysqli_query($conn,$query);
         header("Location: manage_admin.php");
}
if(isset($_POST['submit1'])){
 
   $fullname =  $_POST['name'];
   $email    =  $_POST['email'];
   $password =  $_POST['password'];
   $query = "UPDATE admin SET admin_name = '$fullname',
                           admin_email = '$email',
                       admin_pass = '$password'
                       where admin_id = {$_GET['id']}";
         mysqli_query($conn, $query);
         header("Location: manage_admin.php");

   }
   if(isset($_GET['id1'])) {
     $query = "DELETE FROM admin where admin_id = {$_GET['id1']}";
mysqli_query($conn,$query);
header("Location: manage_admin.php");
}

if (isset($_GET['id'])) {


  $query = " SELECT * from admin where admin_id = {$_GET['id']}";
$result = mysqli_query($conn, $query);
$admin = mysqli_fetch_assoc($result);
}

  ?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Manage Admin</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                          <?php 
                                             if (isset($_GET['id'])) {
                                              echo "<h4><i class='fa fa-angle-right'></i> Edit Admin</h4>";}
                                               elseif (!isset($_GET['id'])) {echo "<h4><i class='fa fa-angle-right'></i> Create Admin</h4>";}
            ?>
                                           
                                        </div>
                                        <hr>
                                        <form action="" method="post" >
                                            
                                            <div class="form-group ">
                                                <label for="cc-number" class="control-label mb-1">Admin Name</label>
                                                <input id="cc-number" name="name" type="text" class="form-control cc-number identified visa" value="<?php if (isset($_GET['id'])) { echo $admin['admin_name'];} ?>" >
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Admin Email</label>
                                                <input id="cc-number" name="email" type="text" class="form-control cc-number identified visa" value="<?php if (isset($_GET['id'])) {echo $admin['admin_email'];} ?>" >
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Admin Password</label>
                                                <input id="cc-number" name="password" type="password" class="form-control cc-number identified visa" value="<?php if (isset($_GET['id'])) {echo $admin['admin_pass'];} ?>" >
                                                
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
                                                <th>E_mail</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                          $query = "SELECT * from admin";
                                          $result = mysqli_query($conn , $query);
                                         while($admin = mysqli_fetch_assoc($result)){
                                         echo '<tr>';
                                         echo "<td>{$admin['admin_id']}</td>";
                                         echo "<td>{$admin['admin_name']}</td>";
                                         echo "<td>{$admin['admin_email']}</td>";
                                         echo "<td><a href='manage_admin.php?id={$admin['admin_id']}' 
                                           class='btn btn-warning'> EDIT </a ></td>";
                                           echo "<td><a href='manage_admin.php?id1={$admin['admin_id']}' 
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