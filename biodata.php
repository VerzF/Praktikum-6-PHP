<html>
<head>
    <title></title>
</head>
<body>
    <b>FORM</b>
    <form action"" method="POST" name="form1">
        <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" name="nama" size 25></td>
            </tr>
            <tr>
                <td>NPM </td>
                <td>:</td>
                <td><input type="text" name="npm" size 25></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td>:</td>
                <td><input type="text" name="alamat" size 25></td>
            </tr>
            <tr>
                <td>Usia </td>
                <td>:</td>
                <td><input type="text" name="usia" size 25></td>
            </tr>
            <tr>
            <td>Jenis Kelamin </td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" checked="">Laki-Laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" checked="">Perempuan
            </td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td>
                    <select name="jurusan">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Sains Data">Sains Data</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="spn" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
</body>

<?php
if(isset($_POST['spn'])){
    $nama=$_POST['nama'];
    $npm=$_POST['npm'];
    $alamat=$_POST['alamat'];
    $usia=$_POST['usia'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $jurusan=$_POST['jurusan'];
}
?>
<b>HASIL</b>
<table border="1">
    <tr>
        <td>NO</td>
        <td>Nama</td>
        <td>NPM</td>
        <td>Alamat</td>
        <td>Usia</td>
        <td>Jenis Kelamin</td>
        <td>Jurusan</td>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $npm; ?></td>
        <td><?php echo $alamat; ?></td>
        <td><?php echo $usia; ?></td>
        <td><?php echo $jenis_kelamin; ?></td>
        <td><?php echo $jurusan; ?></td>
    </tr>
    <?php
    ?>
    </table>
</html>