<?php
  	session_start();
  	if(isset($_SESSION['user'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header_login.php'; ?>
<body class="">


    <!----------------------- Main Container -------------------------->

	<div class="container d-flex justify-content-center align-items-center min-vh-100">

<!----------------------- Login Container -------------------------->

   <div class="row border rounded-5 p-3 bg-white shadow box-area">

<!--------------------------- Left Box ----------------------------->

   <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
	   <div class="featured-image mb-3">
	   <img class="img-fluid" src="../images/logo/acblogo_orig.png" width="230" height="100">
		<img class="img-fluid" src="../images/logo/ASEAN.png" width="80" height="100">

	   </div>
	   <p class="text-black fs-2" >Knowledge Management</p>
	   <p class="text-black text-wrap text-center">Platform</p>
   </div> 

<!-------------------- ------ Right Box ---------------------------->
	
   <div class="col-md-6 right-box">
	  <div class="row align-items-center">
			<div class="header-text mb-4">
				 <h2>Hello!</h2>
				 <!-- <p>We are happy to have you back.</p> -->
			</div>
			<form action="login.php" method="POST">
				<div class="input-group mb-3">
					<input type="text" class="form-control form-control-lg bg-light fs-6" name="username" placeholder="Username" required autofocus>
				</div>
				<div class="input-group mb-1">
					<input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="Password" required>
				</div>
				<div class="input-group mb-5 d-flex justify-content-between">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="formCheck">
						<label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
					</div>
					<div class="forgot">
						<small><a href="#">Forgot Password?</a></small>
					</div>
				</div>
				<div class="input-group mb-3">
					<button class="btn btn-lg btn-primary w-100 fs-6 " name="login">Login</button>
				</div>
				<!-- <div class="input-group mb-3">
					<button class="btn btn-lg btn-light w-100 fs-6"><img src="../images/google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
				</div> -->
				<div class="row">
					<small>Don't have account? <a href="#">Ask the Administrator</a></small>
				</div>
			</form>
	  </div>
   </div> 
   <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
  </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	
<?php include 'includes/scripts.php' ?>
</body>
</html>