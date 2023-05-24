<?php 
    if($_POST){
        $buku = $_POST['kode']."-".$_POST['judul']."-".$_POST['pengarang']."-".$_POST['tahun']."-".$_POST['halaman']."-".$_POST['penerbit']."-".$_POST['kategori']."-".$_POST['cover']."\n";
        $file = "buku.txt";
        if(file_put_contents($file,$buku,FILE_APPEND)>0){
            echo "Data Berhasil Ditambahkan!";
        }else{
            echo "Data Gagal Ditambahkan!";
        }
    }
?>
<br><br>
<a href="baca.php">Tampil Data</a>