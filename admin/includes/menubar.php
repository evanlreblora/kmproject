<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="header">MANAGE</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-refresh"></i>
          <span>Downloaded</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="download.php"><i class="fa fa-circle-o"></i> Download Report</a></li>
          <!-- <li><a href="return.php"><i class="fa fa-circle-o"></i> Return</a></li> -->
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Browse Reports</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="reports.php"><i class="fa fa-circle-o"></i> Reports List</a></li>
          <li><a href="category.php"><i class="fa fa-circle-o"></i> Category</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>ACB and AMS users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="users.php"><i class="fa fa-circle-o"></i> Users List</a></li>
          <li><a href="organisation.php"><i class="fa fa-circle-o"></i> Organisation</a></li>
        </ul>
      </li>
      <li class="header">Configuration</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user-circle"></i>
          <span>Admin users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="admin_user.php"><i class="fa fa-circle-o"></i> Admin List</a></li>
          <!-- <li><a href="course.php"><i class="fa fa-circle-o"></i> Organisation</a></li> -->
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>