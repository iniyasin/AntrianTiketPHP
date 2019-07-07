<?php
    if ($_SERVER["REQUEST_METHOD"]=='POST') {
        //mendapatkan nilai untuk variabel
        $nama = $_POST['nama'];
        $notelp = $_POST['notelp'];
        $alamat = $_POST['alamat'];

        //pembuatan sintaks SQL
        $sql = "INSERT INTO loket_satu (nama, notelp, alamat) VALUES ('$nama','$notelp','$alamat')";

        //import file koneksi ke database
        require_once('koneksi.php');

        //Eksekusi query database
        if (mysqli_query($con, $sql)) {
            echo 'Daftar berhasil';
        } else{
            echo 'Gagal daftar';
        }
        mysqli_close($con);
    }
?>