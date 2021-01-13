<?php
ob_start();
include_once('includes/header.php');
require('includes/connection.php');

   if(isset($_GET['id1'])) {
     $query = "DELETE FROM customer where customer_id = {$_GET['id1']}";
mysqli_query($conn,$query);
header("Location: manage_customer.php");
}



  ?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                             <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>E_mail</th>
                                                <th>phone</th>
                                                <th>Card Name</th>
                                                <th>Card Num</th>
                                                <th>Exp Month</th>
                                                <th>Exp Year</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                          $query = "SELECT * from customer";
                                          $result = mysqli_query($conn , $query);
                                         while($cus = mysqli_fetch_assoc($result)){
                                         echo '<tr>';
                                         echo "<td>{$cus['customer_id']}</td>";
                                         echo "<td>{$cus['first_name']}</td>";
                                         echo "<td>{$cus['email']}</td>";
                                         echo "<td>{$cus['phone']}</td>";
                                         echo "<td>{$cus['card_name']}</td>";
                                         echo "<td>{$cus['card_num']}</td>";
                                         echo "<td>{$cus['exp_month']}</td>";
                                         echo "<td>{$cus['exp_year']}</td>";
                                           echo "<td><a href='manage_customer.php?id1={$cus['customer_id']}' 
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