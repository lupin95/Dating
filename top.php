<?php
$connect = new mysqli('localhost','root','','dating') or die("kết nối thất bại");
mysqli_query($connect,'SET NAME UTF8');
session_start();
$userName=$_SESSION['userName'];
$query= "SELECT `idUser`, `userName`, `passWord`, `fullName`, `birthday`, `sex`, `provinces`, `type` FROM `userinformation` WHERE `userName`='$userName'";
$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result)>0) {
    while ($r = mysqli_fetch_assoc($result)) {
        $idUser = $r['idUser'];
        $fullName = $r['fullName'];
        $birthday = $r['birthday'];
        $sex = $r['sex'];
        $provinces = $r['provinces'];
    }
}
?>
<div id="head">
    <h1>Bạn Muốn Hẹn Hò</h1>
</div>
<div id="menu">
    <ul>
        <li><a href = "home.php">Trang Chủ</a></li>
        <li><a href = "event.php">Sự Kiện</a></li>
        <li><a href = "keyed.php">Bí Quyết Hẹn Hò</a></li>
        <li><a href = "">Gợi Ý Quà Tặng</a></li>
        <li><a href = "">Địa Điểm Hẹn Hò</a></li>
        <li><?php echo "<a href='updateinfo.php?id=$idUser'>Cập Nhật Thông Tin</a>";?></li>
        <li><a href = "">Cài Đặt</a>
            <ul class ="sub-menu">
                <li><a href = "">Bảo Mật</a></li>
                <li><a href = "">Quyền Riêng Tư</a></li>
                <li><a href = "logout.php">Đăng Xuất</a></li>
            </ul>

        </li>
        <li><?php echo "<a href='info.php?id=$idUser'>$fullName</a>";?></li>
    </ul>
</div>