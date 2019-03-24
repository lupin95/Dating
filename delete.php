<?php
include('keyed.php');
if(isset($_GET['id'])){
    $idKeyed=$_GET['id'];
    $query= "DELETE  FROM keyed WHERE idKeyed = $idKeyed";
    $result=mysqli_query($connect,$query) or die($query);
    header('location:keyed.php');
}?>
