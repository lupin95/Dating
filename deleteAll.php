<?php
include ('keyed.php');
if(isset($_REQUEST['deleteAll'])) {
    $chk=$_REQUEST['chk'];
    $a=implode(",",$chk);
    $query= "DELETE  FROM keyed WHERE idKeyed in ($a)";
    $result=mysqli_query($connect,$query) or die($query);
    header('location:keyed.php');
}
?>