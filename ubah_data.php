<?php
    include './koneksi.php';
    $id = $_GET["id_buku"]; 
    
    $sql = "SELECT * from tabel_buku where id_buku=".$id;
    $result = $conn->query($sql);

    $result = $result->fetch_assoc();
?>

<form action = "ubah.php" method="post">
    <input type="hidden" name="id_buku" value="<?php echo $result['id_buku']?>">
    <h1 style='text-align: center;'>Edit Buku</h1>
    <table style='width:100%;text-align: center;'>
            <tr>
                <th >Judul Buku</th>
                <th >Penulis</th>
                <th >Jenis Buku</th>
                <th >Gambar Buku</th>

            </tr><tr>
            <td><input type="text" name ="judul_buku" value="<?php echo $result['judul_buku']?>"></td>
                <td><input type="text" name ="penulis" value="<?php echo $result['penulis']?>"></td>
                <td><input type="text" name ="jenis_buku" value="<?php echo $result['jenis_buku']?>"></td>
                <td><input type="text" name ="gambar_buku" value="<?php echo $result['gambar_buku']?>"></td>
            </tr><tr>
                <td colspan = '4' style='text-align: center;'><input type="submit" name="simpan" value="Ubah"></td>
            </tr>
        </table>
</form> 

