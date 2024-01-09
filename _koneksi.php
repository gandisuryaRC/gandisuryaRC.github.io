<?php
    $namahost = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "sekolah";
    $conn = mysqli_connect($namahost, $user, $password, $database);
    if (!$conn) {
        echo "Database tidak terhubung";
    }
?>