<?php
require 'conn.php';


$id = $_GET['id'];

$sql = "DELETE FROM `data` WHERE sid = '$id';";
$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($result);
// echo $row['sid'];

if($result){
    echo "<script> alert('Deletation successfull'); </script>";

    echo "<script> location.href='admin.php'; </script>";
  

}else{
    echo "<script> alert('Try again'); </script>";
    echo "<script> location.href='admin.php'; </script>";



}
?>