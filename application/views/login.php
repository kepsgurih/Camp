<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/Home-001.css">
</head>
<body>

<div class="topnav">
	
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>

  <div class="login-container">
  <?php if (!empty($_SESSION['email'])){
  	?>
      <a href="<?=base_url() ?>index.php/homepage/out">Logout</a>

  <?php }else{?>

      <a href="<?php echo $auth_url ?>">Login</a>
<?php }?>
  </div>
</div>
<div style="padding-left:16px">
	<?php if (!empty($error_google)){
		echo 'error';
	}
	?>
  <h2>Responsive Login Form in Navbar 
  	<?php 
  	if (!empty($_SESSION['email'])){
  	echo $_SESSION['email'];
  }
  ?>
  </h2>
  <p>Navigation menu with a login form and a submit button inside of it.</p>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

</body>
</html>