<header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">
                    <?php
                    echo $admin['_fullnames'];
                    ?>
              </h6></a>
            <p class="mb-0 font-roboto"><?php
             echo $admin['_address'];
           
            ?></p>
            <ul>
              <li><i class="fa fa-clock-o"></i> <span>Role : <span class=""><?php
             if($admin['_role']==1){
$role = "System Administrator";
             }else if($admin['_role']==2){
              $role = "Traffic Officer";
                           }else if($admin['_role']==3){
                            $role = "Citizen";
                                         }
             echo $role;
                            ?>
              </span></span>
                
              </li>
   
            </ul>
            <!-- <ul> -->
              <!-- <li><i class="fa fa-heart-o"></i> <span>Donated for <span class=""> -->
                                      <?php
                //  $conn = $pdo->open();
                // try{
                //   $stmt3 = $conn->prepare("SELECT *,TIMESTAMPDIFF(MONTH, date_created,CURRENT_DATE()) AS ress FROM membership WHERE membership_id =:id");
                //   $stmt3->execute(['id'=>$admin['membership_id']]);
                //   $row3 = $stmt3->fetch();
                //  echo $row3['ress'];
                // }
                // catch(PDOException $e){
                //   echo "There is some problem in connection: " . $e->getMessage();
                // }

                // $pdo->close();
                ?>
              <!-- </span> Months</span>
             
              </li> -->
              
          
            <!-- </ul> -->
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <!-- <li class="sidebar-main-title">
                    <div>
                      <h6>General </h6>
                    </div>
                  </li> -->
                  <li><a class="nav-link menu-title link-nav" href="index.php"><i data-feather="home"></i><span>Dashboard</span></a>
                    
                  </li>
          <?php if($admin['_role']==1):?>
            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit-3"></i><span>Payments</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="toll_payments.php">Toll Payments</a></li>
                      <li><a href="traffic_penalties.php">Traffic Penalty Payments</a></li>
                      
                      <li> <a href="https://dashboard.flutterwave.com/donate/gpjurqwpfevo">Donations</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="violations.php"><i data-feather="layout"></i><span>Traffic Violations </span></a>
                  
                  </li> 
                   <li><a class="nav-link menu-title link-nav" href="registered_vehicles.php"><i data-feather="layout"></i><span> Vehicle Registry </span></a>
                  
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="traffic_penalties.php"><i data-feather="headphones"></i><span>Traffic Penalties</span></a>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="hotlist.php"><i data-feather="book"></i><span>Hotlist Vehicles</span></a>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="hotlist.php"><i data-feather="layout"></i><span>Hotlist Individuals</span></a>
                  
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="complaints.php"><i data-feather="layout"></i><span>Complaints</span></a>
                  
                  </li>
                  
                  <li><a class="nav-link menu-title link-nav" href="users.php"><i data-feather="layout"></i><span>Users</span></a>
                  
                  </li>
                   
                  <li><a class="nav-link menu-title link-nav" href="profile.php"><i data-feather="layout"></i><span>My Account </span></a>
                  
                  </li>
                  </li>
                    <li><a class="nav-link menu-title link-nav" href="logout.php"><i data-feather="layout"></i><span>Logout </span></a>
                  
                  </li>
 
          <?php endif?>

          <?php if($admin['_role']==2):?>
            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit-3"></i><span>Payments</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="toll_payments.php">Toll Payments</a></li>
                      <li><a href="traffic_penalties.php">Pay Traffic Penalty</a></li>
                      
                      <li> <a href="https://dashboard.flutterwave.com/donate/gpjurqwpfevo">Donate to Us</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="violations.php"><i data-feather="layout"></i><span>Report Traffic Violation </span></a>
                  
                  </li> 
                   <li><a class="nav-link menu-title link-nav" href="check_vehicle.php"><i data-feather="layout"></i><span>Vehicle Details </span></a>
                  
                  </li> 
                  <li><a class="nav-link menu-title link-nav" href="vehicle_details.php"><i data-feather="headphones"></i><span>Demo</span></a>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="vehicle_status.php"><i data-feather="book"></i><span>Vehicle Status</span></a>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="individual_status.php"><i data-feather="layout"></i><span>Individual Status</span></a>
                  
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="hotlist.php"><i data-feather="layout"></i><span>Hotlist Vehicles</span></a>
                  
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="hotlist_individuals.php"><i data-feather="layout"></i><span>Hotlist Individuals</span></a>
                  
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="add_complaint.php"><i data-feather="layout"></i><span>Raise Complaint</span></a>
                  
                  </li>
                   
                  <li><a class="nav-link menu-title link-nav" href="profile.php"><i data-feather="layout"></i><span>My Account </span></a>
                  
                  </li>
                  </li>
                    <li><a class="nav-link menu-title link-nav" href="logout.php"><i data-feather="layout"></i><span>Logout </span></a>
                  
                  </li>
 
          <?php endif?>

          <?php  if($admin['_role']==3):?>
            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit-3"></i><span>Payments</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="citizen_toll_payments.php">Toll Payments</a></li>
                      <li><a href="citizen_penalties.php">Pay Traffic Penalty</a></li>
                      
                      <li> <a href="https://dashboard.flutterwave.com/donate/gpjurqwpfevo">Donate to Us</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="citizen_reports.php"><i data-feather="layout"></i><span>Report Traffic Violation </span></a>
                  
                  </li> 
                    <li><a class="nav-link menu-title link-nav" href="check_vehicle.php"><i data-feather="layout"></i><span>Vehicle Details </span></a>
                  
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="vehicle_details.php"><i data-feather="headphones"></i><span>Demo</span></a>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="vehicle_status.php"><i data-feather="book"></i><span>Vehicle Status</span></a>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="individual_status.php"><i data-feather="layout"></i><span>Individual Status</span></a>
                  
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="add_complaint.php"><i data-feather="layout"></i><span>Raise Complaint</span></a>
                  
                  </li>
                   
                  <li><a class="nav-link menu-title link-nav" href="profile.php"><i data-feather="layout"></i><span>My Account </span></a>
                  
                  </li>
                  </li>
                    <li><a class="nav-link menu-title link-nav" href="logout.php"><i data-feather="layout"></i><span>Logout </span></a>
                  
                  </li>
 
          <?php endif?>
                 
                 </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>