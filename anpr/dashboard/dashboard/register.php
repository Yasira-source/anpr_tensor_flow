<?php
include ('inc/db/session.php');
?>
<?php
  if(isset($_SESSION['admin']) && $_SESSION['admin']!==""){
    header('location: index.php');
    // exit();
  }
   if(isset($_SESSION['cand']) && $_SESSION['cand']!==""){
    header('location: cand_index.php');
    // exit();
  }
   if(isset($_SESSION['student']) && $_SESSION['student']!==""){
    header('location: student_index.php');
    // exit();
  }
   if(isset($_SESSION['agent']) && $_SESSION['agent']!==""){
    header('location: agent_index.php');
    // exit();
  }
  
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
    <title>ICUC - ANPR PROJECT | Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
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
    <link rel="stylesheet" type="text/css" href="../assets/css/sweetalert2.css">
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
    <section>         
      <div class="container-fluid p-0"> 
        <div class="row m-0">
          <div class="col-xl-5"><img class="bg-img-cover bg-center" src="../assets/images/login/3.jpg" alt="looginpage"></div>
          <div class="col-xl-7 p-0"> 
            <div class="login-card">
            <form class="theme-form login-form" action="signup.php" method="POST">
                            <h4>Register</h4>
                            <h6>Welcome ! Carefully fill the form below to create an account.</h6>
                            <?php
    //   if(isset($_SESSION['error'])){
    //     echo "
        
    //         <h6 class='font-secondary'>".$_SESSION['error']."</h6> 
          
    //     ";
    //     unset($_SESSION['error']);
    //   }
    //   if(isset($_SESSION['success'])){
    //     echo "
    //         <h6 class='font-primary'>".$_SESSION['success']."</h6> 
          
    //     ";
    //     unset($_SESSION['success']);
    //   }
    ?>
                <div class="form-group">
                  <label>Your Names</label>
                  <div class="small-group">
                    <div class="input-group"><span class="input-group-text"><i class="fa fa-user"></i></span>
                      <input class="form-control" type="text" required="" name="fname" placeholder="First Name">
                    </div>
                    <div class="input-group"><span class="input-group-text"><i class="fa fa-user"></i></span>
                      <input class="form-control" type="text" name="lname" required="" placeholder="Last Name">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                                <label>Your Mobile Number</label>
                                <div class="row">
                                    <div class="col-4 col-sm-3">
                                        <input class="form-control" type="text" placeholder="+256" value="+256" name="code">
                                    </div>
                                    <div class="col-8 col-sm-9">
                                        <input class="form-control" type="tel" name="phone" placeholder="000-000-0000">
                                    </div>
                                </div>
                            </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <div class="input-group"><span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
                  </div>
                </div>
                <div class="form-group">
                  <label>Physical Address</label>
                  <div class="input-group"><span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                    <input class="form-control" type="text" name="address" required="" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <div class="checkbox">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Agree with <span>Privacy Policy                   </span></label>
                  </div>
                </div> -->
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit" name="submit" value="submit">Create Account</button>
                </div>
                <!-- <div class="login-social-title">                
                  <h5>Sign Up with</h5>
                </div> -->
                <!-- <div class="form-group">
                  <ul class="login-social">
                    <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a></li>
                    <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram">                  </i></a></li>
                  </ul>
                </div> -->
                <p>Already have an account ?<a class="ms-2" href="login.php"> Login</a></p>
                            <p><a class="ms-2" href="../../index.php"> Back to Home Page</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
 <!-- page-wrapper end-->
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
    <script src="../assets/js/sweet-alert/sweetalert.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>