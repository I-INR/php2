<?php
    include './koneksi.php';

    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $gambar_buku = $_POST['gambar_buku'];


    $sql = "INSERT tabel_buku(judul_buku, penulis, jenis_buku, gambar_buku) 
        Values('$judul_buku', '$penulis', '$jenis_buku', '$gambar_buku')";
    if($conn->query($sql) === TRUE){
        echo "<h1 style='text-align: center;'>DATA BERHASIL DISIMPAN</h1><br>";
        echo "<p style='text-align: center;'><a href='tampil2.php'>kembali</a></p><br>";
        echo "<p style='text-align: center;'><a style='text-align: center;' href='formulir.php'>Tambah Data Lagi</a></p><br>";
        
    }else{
        echo "Error: " .$sql . "<br>" . $conn->error;
    }

    $conn->close();
?>