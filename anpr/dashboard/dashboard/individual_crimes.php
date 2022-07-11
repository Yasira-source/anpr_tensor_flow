<?php
include ('inc/db/session.php');
$penalty = $_POST['penalty'];
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
                  <h3><?php echo strtoupper($penalty);?></h3>
                 
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
                    <h5>All Driver's Penalties</h5><br>
                    
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
                             <th>Amount</th>
                             <th>Status</th>
                             <th>Category</th>
                             <th>Description</th>
                             <th>Vehicle</th>
                             <th>Names</th>
                             <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Officer</th>
                            <th>Driver</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                                 <?php
                 $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM `penalty` LEFT JOIN penalty_categories ON penalty_cat=_catid LEFT JOIN users ON _officer=users._uid WHERE _driver=:vno");
                  $stmt->execute(['vno'=>$penalty]);
                 foreach($stmt as $row){
                  
                      $status = ($row['_status']) ? '<div class="span badge rounded-pill pill-badge-primary">Cleared</div>' : '<div class="span badge rounded-pill pill-badge-danger">Active</div>';
                      
                     
                       
                     echo "
                     <tr>
                     <td>".$row['_pid']."</td>
                     
                     <td>UGX ".number_format($row['_amount'])."</td>
                        
                         
                            <td>".$status."</td>
                            
                            <td>".$row['_catname']."</td>
                            <td>".$row['_desc']."</td>
                            <td>".$row['_vehicle']."</td>
                            <td>".$row['_names']."</td>
                            <td>".$row['_emailaddress']."</td>
                            <td>".$row['_phonenumber']."</td>
                            <td>".$row['_fullnames']."</td>
                            <td>".$row['_driver']."</td>
                            
                           
                        
                            <td>".$row['_date_created']."</td>

                            
                         
                          
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
                             <th>Amount</th>
                             <th>Status</th>
                             <th>Category</th>
                             <th>Description</th>
                             <th>Vehicle</th>
                             <th>Names</th>
                             <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Officer</th>
                            <th>Driver</th>
                            <th>Date</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>All Driver's Crime Affiliations</h5><br>
                    
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
                      <table class="display" id="advance-2">
                        <thead>
                          <tr>
                         
                             <th>ID</th>
                             <th>Catgeory</th>
                             <th>Image</th>
                             <th>Location</th>
                             <th>Reported By</th>
                             <th>Reporter's Phone Number</th>
                             <th>Description</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Driver</th>
                            <th>Vehicle</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            
                                 <?php
                 $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM `traffic_violations` LEFT JOIN violation_category ON category=_categoryid LEFT JOIN users ON _user=_uid WHERE _driver=:vno");
                  $stmt->execute(['vno'=>$penalty]);
                 foreach($stmt as $row){
                  
                      $status = ($row['_status']) ? '<div class="span badge rounded-pill pill-badge-primary">Resolved</div>' : '<div class="span badge rounded-pill pill-badge-danger">Pending</div>';
                      
                     
                       
                     echo "
                     <tr>
                     <td>".$row['_vid']."</td>
                     
                     
                            <td>".$row['_names']."</td>
                            <td><img src='../assets/images/reports/".$row['_image']."' height='30px' width='30px'></td>
                     
                            <td>".$row['_location']."</td>
                            <td>".$row['_reportedby']."</td>
                            <td>".$row['_reportedbyphone']."</td>
                            <td>".$row['_otherdetails']."</td>
                            <td>".$row['_date_created']."</td>
                            <td>".$status."</td>
                            <td>".$row['_driver']."</td>
                            <td>".$row['_vehicle']."</td>

               
                         
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
                             <th>Catgeory</th>
                             <th>Image</th>
                             <th>Location</th>
                             <th>Reported By</th>
                             <th>Reporter's Phone Number</th>
                             <th>Description</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Driver</th>
                            <th>Vehicle</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>All Driver's Hotlist Appearances</h5><br>
                    
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
                      <table class="table table-bordernone" id="">
                        <thead>
                          <tr>
                        
                             <th>ID</th>
                             <th>Date</th>
                             <th>Description</th>
                             
                            <th>Status</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                            
                                 <?php
                 $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM `hotlist_drivers` WHERE _driverlicense=:vno");
                  $stmt->execute(['vno'=>$penalty]);
                 foreach($stmt as $row){
                  
                      $status = ($row['_status']) ? '<div class="span badge rounded-pill pill-badge-primary">Cleared</div>' : '<div class="span badge rounded-pill pill-badge-danger">Active</div>';
                      
                     
                       
                     echo "
                     <tr>
                     <td>".$row['_hot_id']."</td>
                     
                     
                            <td>".$row['_date_created']."</td>
                            
                            <td>".$row['_desc']."</td>
                            <td>".$status."</td>
                            
                          
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
                             <th>Date</th>
                             <th>Description</th>
                             
                            <th>Status</th>
                           
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