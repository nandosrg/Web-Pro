<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Lingkaran </title></title>
</head>
<body>
<?php
//konstanta untuk nilai judul
define("judul", "Hitung Luas Lingkaran");
//konstanta untuk nilai phi
define("phi", 3.14);
echo judul;
$r = 10;
echo "<br>Jari-jari Lingkaran = $r<br>";
$luas = phi * $r * $r;
echo "Luas Lingkaran = $luas";
?>    
</body>
</html>
