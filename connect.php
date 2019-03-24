<?php
$sever_username="root";
$sever_password="";
$sever_host="localhost";
$database="dating";
$connect = mysqli_connect($sever_host,$sever_username,$sever_password) or die("kết nối thất bại");
mysqli_select_db($connect,"dating");
mysqli_query($connect,"SET NAMES utf8");
?>