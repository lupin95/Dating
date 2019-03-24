<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Đăng ký</title>
    <link href="css/style.css" rel="stylesheet" media="screen,print">
</head>
<body>
<div class =navbar>
    <a href ="index.php">Đăng Nhập</a>
    <a href="registration.php">Đăng Ký</a>
    <h1>BẠN MUỐN HẸN HÒ</h1>
</div>
<div class="form-rg">
<form action="regis.php" method="post">
    <h2>ĐĂNG KÝ</h2>
        <label for = "userName">Tên Đăng Nhập:</label>
        <input type = "text" id = "userName" name="userName" placeholder ="Tên Đăng Nhập" required><br>
        <label for = "passWord">Mật Khẩu:</label>
        <input type = "text" id = "passWord" name="passWord" placeholder ="Mật Khẩu" required><br>
        <label for = "fullName">Họ Và Tên:</label>
        <input type = "text" id = "fullName" name="fullName" placeholder ="Họ Và Tên" required><br>
        <label for ="birthday">Ngày sinh:</label>
        <input type ="date" id ="age" name ="birthday" placeholder = "Ngày sinh:"> <br>
        <label for ="boolen">Giới Tính: </label>
        <select id = "sex" name ="sex">
            <option value="1">Nam</option>
            <option value="2">Nữ</option>
        </select>
        <label for ="local">Nơi Sinh: </label>
        <select id = "local" name ="provinces">
            <option value="Quảng Nam">Quảng Nam</option>
            <option value="Đà Nẵng">Đà Nẵng</option>
            <option value="Huế">Huế</option>
            <option value="Hà Nội">Hà Nội</option>
            <option value="Quảng Bình">Quảng Bình</option>
        </select><br>
        <label for =check></label>
    <td><input type="checkbox" id ="check" name="check" value="1" required>
        Đồng ý cới các điều khoản của dịch vụ</td><br>
        <input id="btn"type="submit" name="regis" value="Đăng Ký"/>
</form>
</div>

</body>
</html>
