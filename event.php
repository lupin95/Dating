<!DOCTYPE html>
<html>
<head>
    <title>Bạn muốn hẹn hò - Sự Kiện</title>
    <meta charset= "utf-8">
    <link href ="css/content.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("top.php");
?>
<div id ="main">
    <div id="maincontent">
    <div id="content">
        <div class="format">
            <h1 title="Nội dung sự ki">Nội dung sự kiện</h1>
            <div id="contentpost">
                <strong><?php
                    $sql="SELECT * FROM event ORDER BY idevent";

                    $result = mysqli_query($connect, $sql);

                    if ($result) {
                        while ($row=mysqli_fetch_row($result)) {
                            printf ("%s",$row[1]);
                        }
                        mysqli_free_result($result);
                    }
                    ?></strong><br>
                <img id="img-1" src="css/image/3.jpg" ALT="bOT"><br>
               <p> ♥ Chương trình dành cho các bạn ĐỘC THÂN có nhu cầu tìm gấu<br>
                👉👉👉 ĐĂNG KÝ ngay tại:<br>

                <a href="test.php" target="_blank">https://goo.gl/forms/ArpOdYENCHxuD7m03</a><br>

                Các cô gái, chàng trai độc thân này:<br>
                ~~~~
                Hè đến rồi, bạn đã “có hẹn” với ai chưa?<br>
                Gấu không có, thì nằm nhà cau có?<br>
                Một buổi hò hẹn, gặp mặt thân mật cùng những người bạn mới, tại sao không nhỉ?<br>

                SWEET SUMMER NO.1 - sự kiện không thể bỏ lỡ mùa hè này !!!<br>
                Ngày dự kiến: 27/5/2017. Lưu ý: ngày hẹn có thể thay đổi. Nếu đủ số lượng khách chúng tôi sẽ tổ chức sớm hơn ngày dự kiến)<br>

                ✔ Cơ hội gặp gỡ và hẹn hò với 10 chàng trai và 10 cô gái chỉ trong 1 buổi tối<br>
                ✔ Một buổi tiệc nhẹ nhàng và ấm cúng dành riêng cho các tâm hồn FA nhưng không “lệch pha”<br>
                ✔ Những câu chuyện thú vị, cùng những người bạn mới<br>
                ✔ Một thức uống ngon miễn phí và gắp thăm trúng thưởng những phần quà hấp dẫn<br>
                ✔ Trò chơi thú vị và vui nhộn kéo gần khoảng cách giữa bạn và người ấy<br>
                ✔ Thưởng thức những bản tình ca êm ái và ngọt ngào từ ca sĩ của Hanoi Match Hanoi<br>

                Vì cuộc đời là những trải nghiệm. Không trải nghiệm, tuổi trẻ khi ấy thật phí hoài !<br>

                Và biết đâu, qua những cuộc gặp gỡ này, bạn lại có thể may mắn tìm thấy hạnh phúc rồi có quyết định tiến tới hôn nhân thì sao? Tại sao ta không tự tạo DUYÊN NỢ mà phải nhờ vào ÔNG TRỜI ?<br>

                (☞ﾟヮﾟ)☞ Đừng ngại ngần và chần chừ thêm nữa, hãy đến với HANOI MATCH, cùng chúng mình làm nên một buổi tối không-thể-đáng-nhớ-hơn nhé ! ♥ !<br>
                ----------------------------------
                ❗❗❗ Like và share post này ở chế độ public + like fanpage và tag tên 5 người bạn của bạn để nhận giá ưu đãi còn 200.000VNĐ/1 vé/1người. (Giá gốc 300.000VNĐ/1 vé/1người)<br>

                ♥ ĐẶC BIỆT với mỗi nhóm 3 người đi trở lên, giá vé tham dự sẽ giảm từ 200.000 VNĐ xuống còn 180.000 VNĐ nhé.<br>

                🔎 Fanpage : https://www.facebook.com/hanoimatch<br>
                💡 Website : https://hanoimatch.wordpress.com<br>
                ☎ Hotline : 0976037197 (Ms. Thanh)<br>
                ✉ Email : hanoimatch@gmail.com<br>
               </p>
            </div>

        </div>

    </div>
    </div>
    <div id="right">
        <div class="format">
            <h1>Sự Kiện</h1>
            <div id="menur">
                <ul>
                    <li><a href="">Sự kiện sắp diễn ra</a></li>
                    <li><a href="">Sự kiện trong nước</a></li>
                    <li><a href="">Sự kiện ở nước ngoài</a></li>
                    <li><a href="">Quản Lý Bài Viết</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<div id="main1">
    <div id="off-ad">
        <a href="#" onclick="off()">Tắt quảng cáo X</a>
    </div>
    <div id="img-ad">
        <a href="https://www.youtube.com/watch?v=MuzpUV2zpH0" target="_blank">
            <img src="3.jpg" alt="ad" width="350" height="247"/>
        </a>
    </div>
    <div id="on-ad" >
        <a href="#" onclick="on()">Bật quảng cáo X</a>
    </div>
</div>
<script>
    function off() {
        document.getElementById("off-ad").style.display=("none");
        document.getElementById("img-ad").style.display=("none");
        document.getElementById("on-ad").style.display=("block");
    }
    function on() {
        document.getElementById("off-ad").style.display=("block");
        document.getElementById("img-ad").style.display=("block");
        document.getElementById("on-ad").style.display=("none");
    }
</script>
<?php
include ("bot.html");
?>
</body>
</html>