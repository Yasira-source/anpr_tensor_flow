<?php
include ('inc/db/session.php');
?>
<?php
  // if(!isset($_SESSION['admin']) || !isset($_SESSION['officer']) || !isset($_SESSION['citizen'])){
  //   header('location: login.php');
  //   exit();
  // }
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
    <link rel="stylesheet" type="text/css" href="../assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/whether-icon.css">
    <!-- Plugins css Ends-->
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
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
<?php
include('inc/nav_bar.php');
?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <?php
        include('inc/side_bar.php');
        ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3><?php echo '<h6 class="font-primary">Welcome '.$admin['_fullnames'].' !</h6> ';
          ;?></h3>
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
                <div class="col-sm-6">
                 
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid general-widget">
            <div class="row">
              <?php if($admin['_role']==1): ?>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="database"></i></div>
                      <div class="media-body"><span class="m-0">Traffic Officers</span>
                        <h4 class="mb-0 counter">
                                              <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users WHERE _role = 2");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="database"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                      <div class="media-body"><span class="m-0">Citizens</span>
                        <h4 class="mb-0 counter">
                                                  <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users WHERE _role=3");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="shopping-bag"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                      <div class="media-body"><span class="m-0">Vehicles Detected</span>
                        <h4 class="mb-0 counter">
                                                            <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="message-circle"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                      <div class="media-body"><span class="m-0"> Payments</span>
                        <h4 class="mb-0 ">
                                                             <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="user-plus"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif?>
              <?php if($admin['_role']==2): ?>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="database"></i></div>
                      <div class="media-body"><span class="m-0">Reports Today</span>
                        <h4 class="mb-0 counter">
                                              <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users WHERE _role = 2");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="database"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                      <div class="media-body"><span class="m-0">Amount Collected</span>
                        <h4 class="mb-0 counter">
                                                  <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users WHERE _role=3");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="shopping-bag"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                      <div class="media-body"><span class="m-0">Detections</span>
                        <h4 class="mb-0 counter">
                                                            <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="message-circle"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                      <div class="media-body"><span class="m-0"> Payments</span>
                        <h4 class="mb-0 ">
                                                             <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="user-plus"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <?php endif?>
              <?php if($admin['_role']==3): ?>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="database"></i></div>
                      <div class="media-body"><span class="m-0">Amount Paid</span>
                        <h4 class="mb-0 counter">
                                              <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users WHERE _role = 2");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="database"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                      <div class="media-body"><span class="m-0">Status</span>
                        <h4 class="mb-0 counter">
                                                  <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users WHERE _role=3");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="shopping-bag"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                      <div class="media-body"><span class="m-0">Crimes Reported</span>
                        <h4 class="mb-0 counter">
                                                            <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="message-circle"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                      <div class="media-body"><span class="m-0"> Donations</span>
                        <h4 class="mb-0 ">
                                                             <?php
                 $conn = $pdo->open();
                try{
                  $stmt3 = $conn->prepare("SELECT *,COUNT(*) AS nums FROM users");
                  $stmt3->execute();
                  $row3 = $stmt3->fetch();
                 echo $row3['nums'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                        </h4><i class="icon-bg" data-feather="user-plus"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <?php endif?>
                 
              
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h5>LATEST TOLL PAYMENTS</h5>
                    <div class="setting-list">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="user-status table-responsive">
                      <table class="table table-bordernone">
                        <thead>
                          <tr>
                              
                          <th scope="col">Trans ID</th>
                             <th scope="col">Names</th>
                             <th scope="col">Phone Number</th>
                             <th scope="col">Email Address</th>
                             <th scope="col">Vehicle</th>
                             <th scope="col">Route</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Charges</th>
                        
                            <th scope="col">Status</th>
                            <th scope="col">Valid</th>
                            <th scope="col">Date</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            
                        <?php
                 $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT *, toll_payments._amount AS s_amount FROM `toll_payments` LEFT JOIN routes ON toll_payments._route=routes._routeid LEFT JOIN users ON toll_payments._user=users._uid ORDER BY toll_payments._date ASC");
                  $stmt->execute();
                 foreach($stmt as $row){
                  
                      $status = ($row['_valid']) ? '<div class="span badge rounded-pill pill-badge-primary">Valid</div>' : '<div class="span badge rounded-pill pill-badge-danger">Utilised</div>';
                      
                     
                       
                     echo "
                     <tr>
                     <td>".$row['_payid']."</td>
                     
                     
                            <td>".$row['_fnames']."</td>
                            
                            <td>".$row['_phoneno']."</td>
                            <td>".$row['_emailaddress']."</td>
                            <td>".$row['_vno']."</td>
                            <td>".$row['_routename']."</td>
                            <td>UGX ".number_format($row['s_amount'])."</td>
                            <td>UGX ".number_format($row['_charges'])."</td>
                            <td>".$row['_status']."</td>
                            
                            <td>".$status."</td>
                            <td>".$row['_date']."</td>

                            
                         
                            <td>
                              <button class='btn btn-success btn-sm edit btn-flat'> <a href='print_receipt.php?id=".$row['_payid']."' style='color:#fff !important;'>Print</a></button>
                               </td>
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
                      </table>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#products-cart" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
            
                    </div>
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
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../assets/js/general-widget.js"></script>
    <script src="../assets/js/height-equal.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->

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
    <!--<script src="../assets/js/theme-customizer/customizer.js"></script>-->
    <!-- login js-->
    <!-- Plugin used-->
    
  </body>

</html>