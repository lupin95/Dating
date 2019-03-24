<!DOCTYPE html>
<html>
<head>
    <title>Bạn muốn hẹn hò - Sự Kiện</title>
    <meta charset= "utf-8">
    <link href="css/content.css" rel="stylesheet" type="text/css">
    <?php
    include ("connect.php");
    ?>
</head>
<body>
<?php
include("top.php");
?>
<div id ="main">
    <div id="maincontent">
        <div id="content">
            <div class="format">
                <h1 title="Danh Sách">Cập nhật bài viết</h1>
                <div id="contentpost">
                </div>
                <div id="form-update">
                <form method="post">
                    <input type = "text" name="nameKeyed" placeholder ="Tên bài viết" value="<?php $_GET['id']?>"><br>
                    <input type = "text" name="contentKeyed" placeholder ="Nội dung bài viết"><br>
                    <input type ="text"  name ="fullName" placeholder = "Người viết"><br>
                    <input type="submit" name="update" value="Cập nhật"/>
                </form>
                </div>
                <?php
                if(isset($_POST["update"])) {
                    $idKeyed =  $_GET['id'];
                    $nameKeyed = $_POST["nameKeyed"];
                    $contentKeyed =$_POST["contentKeyed"];
                    $fullName =  $_POST["fullName"];

                    $sql = ("UPDATE keyed SET nameKeyed = '$nameKeyed', contentKeyed = '$contentKeyed', fullName = '$fullName' WHERE idKeyed= $idKeyed");
                    mysqli_query($connect, $sql) or die($sql);
                    header("Location: keyed.php");
                }
                ?>
            </div>

        </div>
    </div>
    <div id="right">
        <div class="format">
            <h1>Quản Lý</h1>
            <div id="menuright">
                <ul>
                    <li><a href="keyed.php">Quản Lý Bài Viết</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
</div>

<?php
include ("bot.html");
?>
</body>
</html>