<?php
    include './koneksi.php';

    $id = $_GET['id_buku'];

    $sql = "DELETE From tabel_buku where id_buku='$id'";

    if($conn->query($sql) === true){
        echo "<h1 style='text-align: center;'>DATA BERHASIL DIHAPUS</h1><br>";
        echo "<p style='text-align: center;'><a href='tampil2.php'>kembali</a></p><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
