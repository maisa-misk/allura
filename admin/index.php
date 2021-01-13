<?php
include_once('includes/header.php');
require('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                        $q="SELECT COUNT(admin_id)
                                        FROM admin";
                                        $r=mysqli_query($conn,$q);

                                        while($x=mysqli_fetch_assoc($r)){
                                            $COUNT=$x['COUNT(admin_id)'];
                                        }
                                        
                                        echo "$COUNT";?>
</h2>
                                                <span>Admins</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                        $q="SELECT COUNT(order_id) FROM `order`";
                                        $r=mysqli_query($conn,$q);

                                        while($x=mysqli_fetch_assoc($r)){
                                            $COUNT=$x['COUNT(order_id)'];
                                        }
                                        
                                        echo "$COUNT";?></h2>
                                                <span>Orders</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                        $y="SELECT COUNT(customer_id) FROM `customer`";
                                        $e=mysqli_query($conn,$y);

                                        while($m=mysqli_fetch_assoc($e)){
                                            $COUNT=$m['COUNT(customer_id)'];
                                        }
                                        
                                        echo "$COUNT";?></h2>
                                                <span>Customers</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                        $q2="SELECT SUM(total) FROM `order` ";
                                        $r2=mysqli_query($conn,$q2);
                                        $sum=0;
                                        while($x2=mysqli_fetch_assoc($r2)){
                                          $sum+=$x2['SUM(total)'];
                                        }
                                        echo ($sum) ;
                                        ?></h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php include_once('includes/footer.php') ?>
                        
</body>

</html>
<!-- end document--> 