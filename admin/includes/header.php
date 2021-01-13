<?php
require('includes/connection.php');
session_start();
if (!isset($_SESSION['id'])) {
  header("location: login.php");
  $user = "";
}
else {
  $user = $_SESSION['id'];
 $query= "SELECT * FROM admin ";
$result = mysqli_query($conn,$query);
   
    while($admin = mysqli_fetch_assoc($result)){
      $user = $admin['admin_id'];
    }

}
?>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="allura" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                
                        <li>
                            <a href="manage_admin.php">
                                <i class="fas fa-chart-bar"></i>Manage admin</a>
                        </li>
                         <li>
                            <a href="manage_category.php">
                                <i class="fas fa-chart-bar"></i>Manage category</a>
                        </li>
                        <li>
                            <a href="manage_product.php">
                                <i class="fas fa-chart-bar"></i>Manage product</a>
                        </li>
                        <li>
                            <a href="manage_customer.php">
                                <i class="fas fa-chart-bar"></i>Manage customer</a>
                        </li>
                         <li>
                           <a href="manage_order.php">
                                <i class="fas fa-chart-bar"></i>manage order</a>
                        </li>
                       
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                        
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"> <?php
          if($user!=""){
            $query = "SELECT * FROM admin WHERE admin_id = {$_SESSION['id']}";
                  $result = mysqli_query($conn,$query);
                while($admin = mysqli_fetch_assoc($result)){

                   echo $admin['admin_name'];}
                  echo " </h5>";}
          ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <?php
          if($user!=""){
            $query = "SELECT * FROM admin WHERE admin_id = {$_SESSION['id']}";
                  $result = mysqli_query($conn,$query);
                while($admin = mysqli_fetch_assoc($result)){
                     echo"<h5 class='name'>";
                    echo $admin['admin_name'];
                    echo " </h5>";
                    echo"<span class='email'>";
                    echo $admin['admin_email'] ;
                    echo "</span>";
                   }
                  }
          ?>
                                                
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            
                       