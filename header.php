<?php require('condb.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบประมูลสินค้า</title>
    <link href="bt/css/bootstrap.min.css" rel="stylesheet">
    <link href="bt/css/style.css" rel="stylesheet">
  </head>
  <body>
 <?php 
 error_reporting( error_reporting() & ~E_NOTICE );
 session_start();
// echo '<pre>';
// 	print_r($_SESSION);
// echo '</pre>';
 $m_id = $_SESSION['cus_id'];
 $cus_name = $_SESSION['cus_name'];
 //echo $m_id;
 ?>