
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Cập Nhật Thông Tin</title>
    <link href="css/style.css" rel="stylesheet" media="screen,print">
    <link href="css/content.css" rel="stylesheet" media="screen,print">
</head>
<body>
<?php
include("top.php");
?>
<div class="form-rg">
    <form method="post">
        <h2>Cập Nhật Thông Tin</h2>
        <label for = "username" >Họ Và Tên:</label>
        <input id="userName" type = "text" name="fullName" placeholder="Họ Và Tên" value="<?php $_GET['id']?>" required><br>
        <label for ="birthday">Ngày sinh:</label>
        <input type ="date" id ="age" name ="birthday" placeholder = "Ngày sinh:" required> <br>
        <label for ="boolen">Giới Tính: </label><br>
        <select id = "sex" name ="sex" required>
            <option value="0">Nam</option>
            <option value="1">Nữ</option>
        </select><br>
        <label for ="local">Nơi Sinh: </label><br>
        <select id = "local" name ="provinces" required>
            <option value="92">Quảng Nam</option>
            <option value="43">Đà Nẵng</option>
            <option value="75">Huế</option>
            <option value="29">Hà Nội</option>
            <option value="73">Quảng Bình</option>
        </select><br>
        <label for =check></label>
        <input id="btn" type="submit" name="update" value="Cập Nhật"/><br>
        <?php
        if(isset($_POST['update'])) {
            $idUser = $_GET['id'];
            $fullName = mysqli_real_escape_string($connect, $_POST['fullName']);
            $birthday = mysqli_real_escape_string($connect, $_POST['birthday']);
            $sex = mysqli_real_escape_string($connect, $_POST['sex']);
            $provinces = mysqli_real_escape_string($connect, $_POST['provinces']);

            $sql=("UPDATE userinformation SET fullName='$fullName',birthday='$birthday',sex= '$sex',provinces='$provinces' WHERE idUser=$idUser");
            $result=mysqli_query($connect,$sql);
            if($result){
                header('location:home.php');
            }
            else{
                echo "Cập nhật không thành công";
            }
        }
        ?>
    </form>
</div>
<?php include ('bot.html')?>

</body>
</html>
