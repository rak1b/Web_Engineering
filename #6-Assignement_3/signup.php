<?php
if (isset($_POST['fname'])) {
    require 'conn.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $sid = $_POST['sid'];
    $slot = $_POST['slot'];

    $sql = "INSERT INTO `student`.`data`(`sid`,`fname`,`lname`, `email`, `slot`) VALUES ('$sid','$fname','$lname','$email','$slot')";
    $res=mysqli_query($con,$sql); 
    if($res){
        echo "sign up successfull";

        // $DOMAIN = $_SERVER['SERVER_NAME'];
        // $URL = str_replace("signup","index",$_SERVER['REQUEST_URI']);

        echo "<script> location.href='index.php'; </script>";
      

    }


}
?>