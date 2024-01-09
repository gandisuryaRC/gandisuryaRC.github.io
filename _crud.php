<?php
    require_once('_koneksi.php');
    //sintak input data siswa
    if (isset($_POST['input_siswa'])) {
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $query = "INSERT INTO siswa VALUES('','$nama','$nis','$jenis_kelamin','$agama')"; 
        mysqli_query($conn, $query);
        //$conn untuk menyambungkan ke database
        //$query untuk menjalankan perintah query

        header("Location: tabel.php"); //untuk menuju halaman tabel
    }
    if (isset($_POST['edit_siswa'])) {
        $id = $_POST['id_siswa'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $query = "UPDATE siswa SET
                nis = '$nis',
                nama = '$nama',
                jenis_kelamin = '$jenis_kelamin',
                agama = '$agama',
                WHERE id_siswa = '$id'
                ";
        mysqli_query($conn, $query);
        header("Location: tabel.php");
    }
    

    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        $query = "DELETE from siswa where id_siswa='$id'";
        mysqli_query($conn, $query);
        header("Location: tabel.php");
    }
    
?>