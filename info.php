<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Trang cá nhân</title>
    <link href="css/style.css" rel="stylesheet" media="screen,print">
    <link href="css/content.css" rel="stylesheet" media="screen,print">
</head>
<body>
<?php
include("top.php");
?>
<div id ="main">
    <div id="maincontent">
        <div id="content">
            <div class="format">
                <div id="contentpost">
                    <img src="sontung.jpg" alt="wall.png" style="width:20%;height:200px";>
                    <img src="wall.png" alt="wall.png" style="width:79%;height:200px";>
                </div>
            </div>
        </div>
    </div>

                <div id="right">
                    <div class="format">
                        <div id="menur">
                          <fieldset class="info">
                              <legend style="color: blue ;font-size: 20px "><?php echo $userName?></legend>
                              <table width="100%">
                                  <tr>
                                      <th>Họ và Tên</th>
                                      <th>Ngày Sinh</th>
                                      <th>Giới tính</th>
                                      <th>Nơi Sinh</th>
                                  </tr>
                                  <?php
                                  $query= "SELECT 'iduser' `userName`, `passWord`, `fullName`, `birthday`, `sex`, `provinces`, `type` FROM `userinformation` WHERE `userName`='$userName'";
                                  $result=mysqli_query($connect,$query);
                                  if(mysqli_num_rows($result)>0){
                                      while($r=mysqli_fetch_assoc($result)){
                                          $fullName=$r['fullName'];
                                          $birthday=$r['birthday'];
                                          $sex=$r['sex'];
                                          $provinces=$r['provinces'];
                                          echo "<tr>";
                                          echo "<td>$fullName</td>";
                                          echo "<td>$birthday</td>";
                                          echo "<td>$sex</td>";
                                          echo "<td>$provinces</td>";
                                      }
                                  }
                                  else{
                                      echo "không có dữ liệu";
                                  }
                                  ?>
                              </table>
                          </fieldset>
                        </div>
                    </div>
                </div>

</div>

<?php include ('bot.html')?>
</body>
</html>
