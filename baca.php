<h2>Data Mahasiswa</h2>
<?php 
    $read = file('buku.txt');
?>

<table border="1">
    <tr style="text-align: center;">
        <td>Kode</td>
        <td>Judul</td>
        <td>Pengarang</td>
        <td>Tahun</td>
        <td>Halaman</td>
        <td>Penerbit</td>
        <td>Kategori</td>
        <td>Cover</td>
    </tr>
    <?php 
            foreach($read as $buku){
                $data_buku = explode("-",$buku);
                echo "<tr>";
                echo "<td>$data_buku[0]</td>";
                echo "<td>$data_buku[1]</td>";
                echo "<td>$data_buku[2]</td>";
                echo "<td>$data_buku[3]</td>";
                echo "<td>$data_buku[4]</td>";
                echo "<td>$data_buku[5]</td>";
                echo "<td>$data_buku[6]</td>";
                echo "<td>$data_buku[7]</td>";
                echo "</tr>";
            }
        ?>
</table>