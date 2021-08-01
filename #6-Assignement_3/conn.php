<?php
        $server = "localhost";
        $username = "root";
        $password = "";
    
        $con = mysqli_connect($server, $username, $password);
        if (!$con) {
            die("Connection Failed : " . mysqli_connect_error());
        }
    
?>
