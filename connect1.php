<?php
    $server1 = 'localhost';
    $user1 = 'root';
    $pass1 = "";
    $database1 = "web2_php_admin";

    $conn1 = new mysqli($server1, $user1, $pass1, $database1);

    if($conn1) {
        mysqli_query($conn1, "SET NAMES 'utf8'");
    }
    else {
        echo "Kết nối database1 thất bại";
    }
?>