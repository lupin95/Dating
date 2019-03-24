<?php
include ("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>
        Bạn Muốn Hẹn Hò - Đăng nhập
    </title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class = "navbar">
    <a href="index.php">Đăng Nhập</a>
    <a href="registration.php">Đăng ký</a>
    <h1>BẠN MUỐN HẸN HÒ</h1>
</div>
<div class="form-lg">
    <form action = "" method="POST" >
        <h2>ĐĂNG NHẬP</h2>
        <label> Tên Đăng Nhập: </label><br>
        <input type="text" id = "userName" name ="userName" placeholder="Tên đăng nhập" required><br>
        <label> Mật khẩu: </label> <br>
        <input type="passWord" id = "passWord" name ="passWord" placeholder="Mật Khẩu" required><br>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" id = "check" type="checkbox" name="remember"> Nhớ mật khẩu
            </label>
        </div>
        <input type="submit"  name= "submit" id ="btn" value="Đăng Nhập">
        <a href="forgotpass.php" > Quên mật khẩu?</a><br>
            <span><?php
                echo $error;
                ?>
    </form>
</div>
<marquee>
    CHÀO MỪNG BẠN ĐẾN VỚI BẠN MUỐN HẸN HÒ
</marquee>
</body>
</html>