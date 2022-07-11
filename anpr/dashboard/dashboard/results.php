<?php
include ('inc/db/session.php');
?>
<?php
  if(!isset($_SESSION['admin']) && $_SESSION['admin']!==""){
    header('location: admin_login.php');
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Login ICUC E-VOTING SYSTEM">
    <meta name="keywords" content="eaoug, EAO, Orphans in Uganda">
    <meta name="author" content="EAO - Uganda">
    <!--<meta name="author" content="pixelstrap">-->
    <link rel="icon" href="../assets/images/logo/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/logo.png" type="image/x-icon">
    <title>ICUC E-VOTING - ADMIN DASHBOARD</title>
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
                  <h3>Results</h3>
                 
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
                    <h5>All E-Voting Results</h5>
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
                          <th>System ID</th>
                            <th>Full Names</th>
                            
                            <th>Post</th>
                            <th>Status</th>

                            <th>Photo</th>
                          
                           <th>Votes</th>
                           <th>Results</th>
                           <th>Actions</th>
                            
                          
                          </tr>
                        </thead>
                        <tbody>
                            
                                 <?php
                 $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT *  FROM `candidates` LEFT JOIN department ON candidates.faculty_id=department.department_id LEFT JOIN posts ON candidates.post=posts.post_id WHERE status=1");
                  $stmt->execute();
                 foreach($stmt as $row){
                  $image = (!empty($row['photo'])) ? '../assets/images/candidates/'.$row['photo'] : '../assets/images/candidates/person.png';
                    
                      $status = ($row['status']) ? '<div class="span badge rounded-pill pill-badge-primary">Active</div>' : '<div class="span badge rounded-pill pill-badge-danger">not verified</div>';
                      
                        $active = (!$row['status']) ? '<span class="pull-right"><a href="activate2.php?id='.$row['id'].'" class="status"><i class="fa fa-check-square-o"></i></a></span>' : '';
                        
                        $stmt2 = $conn->prepare("SELECT * ,MAX(votes) AS winn FROM `candidates`  WHERE status=1 ");
                        $stmt2->execute();
                        $row2 = $stmt2->fetch();
                        $state = ($row['votes']>=$row2['winn']&&$row['votes']>0) ? '<div class="span badge rounded-pill pill-badge-primary">Winner</div>' : '<div class="span badge rounded-pill pill-badge-danger">Looser</div>';
                      
                       
                     echo "
                     <tr>
                     <td>".$row['id']."</td>
                     
                     
                            <td>".$row['fname']." ".$row['fname']."</td>
                            
                           
                            <td>".$row['post_name']."</td>
                            <td>".$status." ".$active."</td>
                            <td><img src='".$image."' height='30px' width='30px'></td>
                            
                            <td class='font-secondary'>".$row['votes']."</td>
                            <td>".$state."</td>
                         
                            <td>
                              <button class='btn btn-success btn-sm edit btn-flat'> <a href='update_results.php?id=".$row['id']."' style='color:#fff !important;'>Edit</a></button>
                              <button class='btn btn-danger btn-sm delete btn-flat'><a href='delete_results.php?id=".$row['id']."' style='color:#fff !important;'> Delete</a></button>
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
                        <tfoot>
                          <tr>
                          <th>System ID</th>
                            <th>Full Names</th>
                            
                            <th>Post</th>
                            <th>Status</th>

                            <th>Photo</th>
                          
                           <th>Votes</th>
                           <th>Actions</th>
                           
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
                <p class="mb-0">Copyright <?php echo date('Y');?> © ICUC - E-Voting System All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">"Graduation Projects" <i class="fa fa-heart font-secondary"></i></p>
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