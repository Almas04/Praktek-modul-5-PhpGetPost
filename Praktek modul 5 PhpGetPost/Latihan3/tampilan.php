<?php 
// Menampilkan teks
echo "<h1>Biodata Saya</h1>";
echo "Nama : ".$_POST['field1']."<br>";
echo "Email : ".$_POST['field2']."<br>";
echo "No Telepon : ".$_POST['field3']."<br>";
echo "Jurusan : ".$_POST['field5']."<br>";
echo "Jenis Kelamin : ".$_POST['field6']."<br>";
echo "Agama :".$_POST['field7']."<br>";
echo "Anda mengisi biodata ini pada : ".date("d-F-Y");
?>