<?php
    include './koneksi.php';
    $id = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $gambar_buku = $_POST['gambar_buku'];


    $sql = "UPDATE tabel_buku set judul_buku='$judul_buku', 
        penulis='$penulis', jenis_buku='$jenis_buku', gambar_buku='$gambar_buku' where id_buku='$id'";
    if($conn->query($sql) === True){
        echo "<h1 style='text-align: center;'>DATA BERHASIL DIUBAH</h1><br>";
        echo "<p style='text-align: center;'><a href='tampil2.php'>kembali</a></p><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>