<?php
$conerror = "Datebase is not connected";
  $con = mysqli_connect('DATABASE_URL','root','') or die("please check your username and password!");
  mysqli_select_db($con ,"fund_raise") or die(  $conerror );
  
?>