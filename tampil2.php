<?php
    include './koneksi.php';
    echo "<h1 style='text-align: center;'>Tabel Buku</h1><br>"; 
    
    $sql = "SELECT * from tabel_buku";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<table style='width:100%; text-align: center; border: 1px solid black; background-color: #00ff99;'>
                <tr>               
                    <th colspan = '2' style='text-align: center; border: 1px solid black; font-size: 30px;'>$baris[1]</th>
                </tr><tr>
                    <td colspan = '2' style='width:100%; text-align: center; border: 1px solid black;'>
                    <img src='gambar/$baris[4]' alt='$baris[4]' width='15%'></td>
                </tr><tr>
                    <td style='width:50%; text-align: center; border: 1px solid black;'>Penulis<br>$baris[2]</td>
                    <td style='width:50%; text-align: center; border: 1px solid black;'>Jenis Buku<br>$baris[3]</td>
                </tr><tr>
                    <td style='width:50%; text-align: center; border: 1px solid black;'>
                    <a href='ubah_data.php?id_buku=$baris[0]'>Ubah &nbsp</a></td>
                    <td style='width:50%; text-align: center; border: 1px solid black;'>
                    <a href='hapus.php?id_buku=$baris[0]'>Hapus</a></td>
                </tr>
            </table><br><br><br>";
        $a++;}
        
    echo "<form action = 'search.php' method='post'>
            <table style='width:100%;text-align: center;'>
                <tr>
                    <td style='width:50%;text-align: center;'>
                        <a href='formulir.php'><h3 style='text-align: center;'>Tambah data</h3></a>
                    </td>
                    <td style='width:50%;text-align: center;'>
                        <h3>Cari Buku</h3><input type='text' name ='judul_buku'>
                        <input type='submit' name='search' value='cari'>
                    </td>
                </tr>
            </table>
            </form>";
    $conn->close(); 
?>
