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
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
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
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
           <?php
           include_once('inc/nav_bar.php');
           ?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
          <?php
          include_once('inc/side_bar.php');
          ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Registered Vehicles</h3>
                 
                </div>
                <div class="col-sm-6">
                  
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>All Registerd Vehicles </h5><br>
                    <!--<button class="btn btn-primary" type="submit" name="submit" value="submit"><i class="fa fa-money"></i>  <a href="vehicle_details.php" style="color:#fff !important;">New Demo</a></button>-->
                   
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
                    <div class="table-responsive">
                      <table class="display" id="advance-1">
                        <thead>
                          <tr>
                             
                           <th>ID</th>
                           <th>Number Plate</th>

                             <th>Owner</th>
                             <th>Contacts</th>
                             <th>Make</th>
                             <th>Model</th>
                            
                            <th>Color</th>
                            <th>Year</th>
                             <th>Milleage</th>
                             
                            <th>Date</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            
                                 <?php
                 $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM `registered_vehicles` ORDER BY reg_no DESC");
                  $stmt->execute();
                 foreach($stmt as $row){
                  
                    //   $status = ($row['_transstatus']) ? '<div class="span badge rounded-pill pill-badge-primary">Successful</div>' : '<div class="span badge rounded-pill pill-badge-danger">Fail</div>';
                      
                    
                     echo "
                     <tr>
                     <td>".$row['reg_no']."</td>
                     <td>".strtoupper($row['no_plate'])."</td>
                     
                     
                            <td>".$row['v_owner']."</td>
                              <td>".$row['owner_phone']."</td>
                              
                            
                            <td>".$row['v_make']."</td>
                           
                     
                            <td>".$row['v_type']."</td>
                            <td>".$row['v_color']."</td>
                            <td>".$row['v_year']."</td>
                              <td>".$row['v_mileage']."</td>
                           
                            <td>".$row['date_created']."</td>

                          </tr>
                     ";
                 }
                 
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                            
                         
                         
                        </tbody>
                        <tfoot>
                          <tr>
                         
                           <th>ID</th>
                           <th>Number Plate</th>

                             <th>Owner</th>
                             <th>Contacts</th>
                             <th>Make</th>
                             <th>Model</th>
                            
                            <th>Color</th>
                            <th>Year</th>
                             <th>Milleage</th>
                             
                            <th>Date</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- DOM / jQuery  Ends-->
              
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright <?php echo date('Y');?> © ICUC - ANPR PROJECT All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">"ICUC - ANPR PROJECT" <i class="fa fa-heart font-secondary"></i></p>
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
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!--<script src="../assets/js/theme-customizer/customizer.js"></script>-->
    <!-- login js-->
    <!-- Plugin used-->
  </body>

</html>