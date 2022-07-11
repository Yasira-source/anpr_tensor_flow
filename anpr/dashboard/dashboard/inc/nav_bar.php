<div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="#"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="#"><img class="img-fluid" src="../assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">You have <?php
                 $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT *,COUNT(*) AS numss FROM complaints");
                  $stmt->execute();
                  $row = $stmt->fetch();
                 echo $row['numss'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                    Notifications<span class="pull-right badge badge-primary badge-pill">
                              <?php
                 $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT *,COUNT(*) AS numss FROM complaints");
                  $stmt->execute();
                  $row = $stmt->fetch();
                 echo $row['numss'];
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
                    </span></p>
                  </li>
                
                        <?php
                 $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM complaints");
                  $stmt->execute();
                  foreach($stmt as $row){
                      echo "
                         <li class='noti-secondary'><a href='view_complaint.php?id=".$row['_cid']."'>
                    <div class='media'><span class='notification-bg bg-light-secondary'><i data-feather='check-circle'> </i></span>
                      <div class='media-body'>
                        <p>".$row['_names']."</p><span>".$row['_date_created']
                        ."</span>
                      </div>
                    </div></a>
                  </li>
                      ";
                      
                      
                  }
                
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();
                ?>
               
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="logout.php"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>