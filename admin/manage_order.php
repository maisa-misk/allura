<?php
ob_start();
include_once('includes/header.php');
require('includes/connection.php');

   if(isset($_GET['id'])) {
     $qurr = "DELETE FROM `order` WHERE order_id = {$_GET['id']}";
mysqli_query($conn,$qurr);
header("Location: manage_order.php");
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
                                                <th>Customer Id</th>
                                                <th>Total</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                          $qrrr = "SELECT * FROM `order`";
                                          $rrs = mysqli_query($conn , $qrrr);
                                         while($ord = mysqli_fetch_assoc($rrs)){
                                         echo '<tr>';
                                         echo "<td>{$ord['order_id']}</td>";
                                         echo "<td>{$ord['customer_id']}</td>";
                                         echo "<td>{$ord['total']}</td>";
                                         
                                           echo "<td><a href='manage_order.php?id={$ord['order_id']}' 
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