<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" tyep="text/css" href="style.css">
    <title>Halaman Login</title>
    <h1 style="text-align: center;padding-top: 3%;color: black;">LOGIN</h1>
</head>
<body>
<form method="POST" action="datakirim.php">
    <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
            <td width="130">Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td width="130">Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="btnLogin" value="Kirim">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>
    </table>
</form>
</body>
</html>