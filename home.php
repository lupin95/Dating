
<!DOCTYPE html>
<html>
<head>
    <title>Bạn muốn hẹn hò - Trang chủ</title>
    <meta charset= "utf-8">
    <link href ="css/content.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include("top.php");
?>
<div class="chatform">
    <div id="chattop">
    </div>
    <div id="messeger">
    </div>
    <div id="chat">
        <input style="height: 30px;width: 80%" type="text" name = "chat" placeholder="Nhập tin nhắn....">
        <input style="height: 30px;width: 18%" type="button" name="send" value="Gửi">
    </div>
</div>
<?php
include ("bot.html");
?>
</body>
</html>