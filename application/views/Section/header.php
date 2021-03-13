<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$title;?></title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php if($title=='Login'){?>
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/login.css');?>">
<?php }else{?>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/Home-001.css">
<?php }?>
</head>