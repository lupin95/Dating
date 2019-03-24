<!DOCTYPE html>
<html>
<head>
    <title>Bạn muốn hẹn hò - Bí quyết hẹn hò</title>
    <meta charset= "utf-8">
    <link href="css/content.css" rel="stylesheet" type="text/css">
    <link href="css/table.css" rel="stylesheet" type="text/css">
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
                <h1 title="Danh Sách">Danh Sách Bài Viết</h1>
                <div id="contentpost">
                    <form method="post">
                  <table width="100%">
                      <tr>
                          <th>STT</th>
                          <th>Mã Bài Viết</th>
                          <th>Tên Bài VIết</th>
                          <th>Nội Dung</th>
                          <th>Người Viết</th>
                          <th>Xử Lý</th>
                          <th><input type="submit" name="deleteAll" value="Xóa chọn"></th>
                      </tr>
                      <?php
                      $query= "SELECT * FROM keyed";
                      $result=mysqli_query($connect,$query);
                      if(mysqli_num_rows($result)>0){
                          $i=0;
                          while($r=mysqli_fetch_assoc($result)){
                              $i++;
                              $idKeyed=$r['idKeyed'];
                              $nameKeyed=$r['nameKeyed'];
                              $contentKeyed=$r['contentKeyed'];
                              $fullName=$r['fullName'];
                              ?>
                             <tr>
                             <td><?php echo "$i"?></td>
                             <td><?php echo "$idKeyed"?></td>
                             <td><?php echo "$nameKeyed"?></td>
                            <td><?php echo "$contentKeyed"?></td>
                              <td><?php echo "$fullName"?></td>
                              <td><?php echo "<a href='delete.php?id=$idKeyed'>Xóa</a>|<a href='updateKeyed.php?id=$idKeyed'>Sửa</a></td>"?>
                                 <td> <input type="checkbox" name="chk[]" value="<?php echo $idKeyed ?>" ></td>
                              </tr>
                     <?php }
                      }
                        ?>
                      <?php
                      if(isset($_REQUEST['deleteAll'])) {
                          if (empty($_POST['chk'])) {
                            echo " ";
                          } else {
                              $chk = $_REQUEST['chk'];
                              $a = implode(",", $chk);
                              $query = "DELETE  FROM keyed WHERE idKeyed IN ($a)";
                              $result = mysqli_query($connect, $query) or die($query);
                              header('location:keyed.php');
                          }
                      }
                      ?>
                  </table>
                    </form>
                    <h1>Thêm Bài Viết</h1>
                    <div id="form-content">
                    <form method="post">
                        <input type = "text"  name="idKeyed" placeholder ="Mã số bài viết" ><br>
                        <input type = "text" name="nameKeyed" placeholder ="Tên bài viết"><br>
                        <input type = "text" name="contentKeyed" placeholder ="Nội dung bài viết"><br>
                        <input type ="text"  name ="fullName" placeholder = "Người viết"><br>
                        <input type="submit" name="insert" value="Thêm Bài viết"/>
                    </form>
                    </div>
                    <?php
                    if(isset($_POST["insert"])) {
                        $idKeyed = mysqli_real_escape_string($connect, $_POST['idKeyed']);
                        $nameKeyed = mysqli_real_escape_string($connect, $_POST["nameKeyed"]);
                        $contentKeyed = mysqli_real_escape_string($connect, $_POST["contentKeyed"]);
                        $fullName = mysqli_real_escape_string($connect, $_POST["fullName"]);
                            $sql = ("INSERT INTO keyed(idKeyed, nameKeyed, contentKeyed, fullName) VALUES ('$idKeyed','$nameKeyed','$contentKeyed','$fullName')");
                            mysqli_query($connect, $sql) or die("Không thể thêm bài viết");
                            header('location keyed.php');
                        }
                    ?>
                </div>

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

<?php
include ("bot.html");
?>
</body>
</html>