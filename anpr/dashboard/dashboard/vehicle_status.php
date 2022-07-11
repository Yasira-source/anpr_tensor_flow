<?php
include ('inc/db/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ICUC - ANPR PROJECT | A Cloud ANPR Service by ICUC">
  <meta name="keywords" content="ICUC - ANPR PROJECT | A Cloud ANPR Service by ICUC">
  <meta name="author" content="ICUC - ANPR PROJECT | A Cloud ANPR Service by ICUC">
  <link rel="icon" href="../assets/images/logo/logo.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/logo/logo.png" type="image/x-icon">
  <title>ICUC - ANPR PROJECT | DASHBOARD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php
      include_once('inc/nav_bar.php');
      ?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
       <?php
       include_once('inc/side_bar.php');
       ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid dashboard-default-sec">
            <div class="row">
              
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>ICUC - ANPR PROJECT - Vehicle Hotlist Status  Form</h5><span>Using the <a href="#">form</a> below, you can check for the status of your vehicle in the traffic police hotlist </span>
                    
                                 <?php
      if(isset($_SESSION['error'])){
        echo "
          
            <h6 class='font-secondary'>".$_SESSION['error']."</h6> 
          
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          
            <h6 class='font-primary'>".$_SESSION['success']."</h6> 
          
        ";
        unset($_SESSION['success']);
      }
    ?>
                  </div>
                  <div class="card-body">
                    <form class="theme-form" action="vehicle_crimes.php" method="POST" enctype="multipart/form-data">
      
                      
                    
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="penalty">Search for the Vehicle Number Plate </label><br>
                        <small class="form-text text-muted" id="penalty">Enter your Vehicle No. Plate </small>
                        <input type="text" id="penalty" name="penalty" class="form-control" required>
          
                             
                      </div>
                     
                      <button class="btn btn-primary" type="submit" name="submit" value="submit">Search</button>
                   
                    </form>
                  </div>
                  <div class="card-footer">
                    
                  </div>
                </div>
              </div>

              
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright <?php echo date('Y');?> © ICUC - ANPR All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">"ICUC - Graduation Projects" <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/knob/knob.min.js"></script>
    <script src="../assets/js/chart/knob/knob-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/prism/prism.min.js"></script>
    <script src="../assets/js/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="../assets/js/counter/jquery.counterup.min.js"></script>
    <script src="../assets/js/counter/counter-custom.js"></script>
    <script src="../assets/js/custom-card/custom-card.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/notify/index.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>