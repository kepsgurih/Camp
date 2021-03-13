<div class="navbar-logo" style="overflow: auto;height: 46px">
  <h1 class="headline">Camping.id</h1>
  <!-- Jika Belum Masuk -->
  <?php 
    if (empty($_SESSION['email'])){?>
      <a class="btn-login" href="<?=base_url('homepage/login');?>">Login | Register</a>
    <?php
  }else{?>
    <a href="" style="float:right"><img class="avatar" src="<?=$_SESSION['picture'];?>"></a>
  <a class="btn-login" href="<?=base_url('homepage/out');?>">Logout</a>
  <?php }?>
</div>
<div class="topnav" id="myTopnav">
  <a class="menu-link" href="#home" class="active">Home</a>
  <a class="menu-link" href="#news">News</a>
  <a class="menu-link" href="#contact">Contact</a>
  <a class="menu-link" href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <img src="<?=base_url('assets/icons/menu.svg');?>" class="material-icons">
  </a>
</div>
<div style="padding-left:16px">
  <h2>Responsive Topnav Example</h2>
  <p>Resize the browser window to see how it works.</p>
</div>