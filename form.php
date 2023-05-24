<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>

<body>
    <h2>Input Data Buku</h2>
    <form action="simpan.php" method="post">
        <table>
            <tr>
                <td><label for="kode">Kode</label></td>
                <td><input type="text" name="kode" id="kode"></td>
            </tr>
            <tr>
                <td><label for="judul">judul</label></td>
                <td><input type="text" name="judul" id="judul"></td>
            </tr>
            <tr>
                <td><label for="pengarang">pengarang</label></td>
                <td><input type="text" name="pengarang" id="pengarang"></td>
            </tr>
            <tr>
                <td><label for="tahun">tahun</label></td>
                <td><input type="text" name="tahun" id="tahun"></td>
            </tr>
            <tr>
                <td><label for="halaman">halaman</label></td>
                <td><input type="text" name="halaman" id="halaman"></td>
            </tr>
            <tr>
                <td><label for="penerbit">penerbit</label></td>
                <td><input type="text" name="penerbit" id="penerbit"></td>
            </tr>
            <tr>
                <td><label for="kategori">kategori</label></td>
                <td><input type="text" name="kategori" id="kategori"></td>
            </tr>
            <tr>
                <td><label for="cover">cover</label></td>
                <td><input type="file" name="cover" id="cover"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>