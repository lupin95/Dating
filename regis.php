<?php
$error='';
$userNamet='';
include("connect.php");
if(isset($_POST["regis"])) {
    $userName = mysqli_real_escape_string($connect, $_POST["userName"]);
    $passWord = mysqli_real_escape_string($connect, $_POST["passWord"]);
    $fullName = mysqli_real_escape_string($connect, $_POST["fullName"]);
    $birthday = mysqli_real_escape_string($connect, $_POST["birthday"]);
    $sex= mysqli_real_escape_string($connect, $_POST["sex"]);
    $provinces = mysqli_real_escape_string($connect, $_POST["provinces"]);
    $passWord = md5($passWord);
    $sql = ("select * from userinformation where userName");
    $result1=mysqli_query($connect,$sql);
    $num1=mysqli_num_rows($result1);
    if ($num1>0) {
        $error="tài khoản đã tồn tại";
    }
    else  {
        $sql = ("insert into userinformation(userName,passWord,fullName,birthday,sex,provinces) values('$userName','$passWord','$fullName','$birthday','$sex','$provinces')");
        mysqli_query($connect, $sql);
        header("Location: index.php");
    }
}
?>