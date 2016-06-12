<html>
    <body>
        <form method="post" action="index.php">
        <table width="500" border="0" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100">nama</td>
            <td><input name="nama" type="text" id="nama"></td>
        </tr>
        <tr>
            <td width="120">kelas</td>
            <td><input name="kelas" type="text" id="Kelas"></td>
        </tr>
                <tr>
            <td width="110"> </td>
            <td>
                <input name="simpan" type="submit" id="simpan" value="Simpan">
            </td>
        </tr>
        </table>
    </form>
        <?php
            if(isset($_POST['simpan']))
            {
            $servername="localhost";
    $username="root";
    $password="";
    $database="db_mahasiswa";
    $koneksi=mysqli_connect ($servername, $username, $password,$database);

  if ($koneksi) {
    
     echo "<b> Koneksi Berhasil </b>";
   } else {
     echo "<b> Koneksi Gagal </b>";
   }
             
            if(! get_magic_quotes_gpc() )
            {
               $nama = addslashes ($_POST['nama']);
               $kelas = addslashes ($_POST['kelas']);
            }
            else
            {
               $nama = $_POST ['nama'];
               $kelas= $_POST ['kelas'];
               }
            
            //Memasukkan data kedalam tabel mahasiswa
            $sql = "INSERT INTO tb_kelas ".
                   "(nama,kelas) ".
                   "VALUES('$nama','$kelas')";
          
            $tambahdata = mysqli_query($koneksi,$sql );
            if(! $tambahdata )
            {
              die('Gagal Tambah Data: ' . mysql_error());
            }
            echo "Berhasil tambah data\n <br>";
            
            //Mengambil data dari tabel mahasiwa
            $sql = "SELECT nama,kelas FROM tb_kelas";
            $hasil = mysqli_query($koneksi,$sql);
            
            // Hasil Inputan
            while ( $row = mysqli_fetch_assoc($hasil) ) {
                echo "<br>";
                echo "Kode Kelas: " . $row["nama"]. "Kelas: " . $row["kelas"]. "<br>";
            }
            mysqli_close($koneksi);
            }
            else
            {
            }
        ?>
    </body>
</html>
