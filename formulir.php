<form action = "simpan.php" method="post">
    <h1 style='text-align: center;'>Tambah Buku</h1>
    <table style='width:100%;text-align: center;'>
            <tr>
                <th >Judul Buku</th>
                <th >Penulis</th>
                <th >Jenis Buku</th>
                <th >Gambar Buku</th>

            </tr><tr>
                <td><input type="text" name ="judul_buku"></td>
                <td><input type="text" name ="penulis"></td>
                <td><input type="text" name ="jenis_buku"></td>
                <td><input type="text" name ="gambar_buku"></td>
            </tr><tr>
                <td colspan = '4' style='text-align: center;'><input type="submit" name="simpan" value="SIMPAN"></td>
            </tr>
        </table>
</form>
