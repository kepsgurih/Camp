<div class="navbar-logo" style="overflow: auto;height: 46px">
  <h1 class="headline">Camping.id</h1>
  <!-- Jika Belum Masuk -->
  <?php 
    if (empty($_SESSION['email'])){?>
      <a class="btn-login" href="<?=base_url('homepage/login');?>">Gabung</a>
    <?php
  }else{?>
    <a href="" style="float:right"><img class="avatar" src="<?php if(isset($_SESSION['picture'])){echo $_SESSION['picture'];}else{echo base_url('assets/icons/user.svg');}?>"></a>
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
  <h2>Hello <?php if (empty($_SESSION['name'])){echo 'Pendaki !';} else{ echo $_SESSION['name'];}?></h2>
  <p>Ini Nanti diisi Main, Navbar nanti warna biru</p>
</div>