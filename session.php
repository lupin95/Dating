<?php
include ("connect.php");
$error='';
if(isset($_POST['submit'])) {
    if (empty($_POST['userName'])  || empty($_POST['passWord'])) {
        $error = "Vui lòng nhập Tên đăng nhập và Mật khẩu!";
    } else {
        $userName = $_POST['userName'];
        $passWord = $_POST['passWord'];
        $passWord = md5($passWord);
        $query = mysqli_query($connect, "SELECT * FROM userInformation WHERE userName='$userName' AND passWord='$passWord'");
        if (mysqli_num_rows($query) > 0) {
            session_start();
            $_SESSION['userName']= $userName;
            header("Location: home.php");
        } else {
            $error = "Tên đăng nhập hoặc mật khẩu không đúng";
        }
        mysqli_close($connect);
    }
}

?>
