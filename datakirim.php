<html>
<head>
    <title></title>
    <link rel="stylesheet" tyep="text/css" href="style.css">
</head>
<body>
<?php
if (empty($_POST['nama'])) {
    header("Location:datakosong.php");
} elseif (empty($_POST['email'])) {
    header("Location:datakosong.php");
} else {
    echo "<center>Nama :".$_POST['nama']."</center><br>";
    echo "<center>Email :".$_POST['email']."</center><br>";
    echo date("l-m-F-Y, g:i:s a");
}
?>
</body>
</html>