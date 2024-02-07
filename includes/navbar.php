<header class="main-header">
  
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <img class="img-fluid" src="images/logo/acblogo_orig.png" width="150" height="40">
		<img class="img-fluid" src="images/logo/ASEAN.png" width="40" height="40">
 
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>ACB-KM</b>P</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
  

    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
        <a href="#" class="navbar-brand"><b>Knowledge Management</b> Platform</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
          <?php
            if(isset($_SESSION['student'])){
              echo "
                <li><a href='index.php'>HOME</a></li>
              
                <li><a href='reports.php'>LIST OF REPORTS</a></li>
              ";
            } 
          ?>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <?php
            if(isset($_SESSION['student'])){
              $photo = (!empty($student['photo'])) ? 'images/'.$student['photo'] : 'images/profile.jpg';
              echo "
                <li class='user user-menu'>
                  <a href='#'>
                    <img src='".$photo."' class='user-image' alt='User Image'>
                    <span class='hidden-xs'>".$student['firstname'].' '.$student['lastname']."</span>
                  </a>
                </li>
                <li><a href='logout.php'><i class='fa fa-sign-out'></i> LOGOUT</a></li>
              ";
            }
            else{
              echo "
                <li><a href='#login' data-toggle='modal'><i class='fa fa-sign-in'></i> LOGIN</a></li>
              ";
            } 
          ?>
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
  </nav>
</header>
<?php include 'includes/login_modal.php'; ?>