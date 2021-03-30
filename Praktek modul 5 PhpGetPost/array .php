<html>
<head>
    <title> Pemrograman PHP dengan Array  </title>
</head>
<body>
<?php 
// penulisan array dapat diubah seperti berikut 
$nama [] = "Firdaus";
$nama [] = "Almas";
$nama [] = "Agung";
echo $nama[1] . $nama[2] . $nama[0];
echo "<br>";
// menghitung jumlah elemen array
$jum_array = count($nama);
echo" Jumlah elemen array = " .$jum_array;
?>
</body>
</html>