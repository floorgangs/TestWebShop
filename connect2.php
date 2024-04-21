<?php
    $server2 = "localhost";
    $user2 = "root";
    $pass2 = "";
    $database2 = "web2_php_user";

    $conn2 = new mysqli($server2, $user2, $pass2, $database2);

    if($conn2) {
        mysqli_query($conn2, "SET NAMES 'utf8'");
    }
    else {
        echo "Kết nối database2 thất bại";
    }
?>