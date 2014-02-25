<?php
$host = "localhost";
$database = "tugasakhir";
$user = "root";
$pass = "";

mysql_connect("$host","$user","$pass") or die("cannot connect server");
mysql_select_db("$database")or die("cannot select DB");

$id_angkatan=$_POST['angkatan'];
$nim_mahasiswa=$_POST['nim_mahasiswa'];
$nama_mahasiswa=$_POST['nama_mahasiswa'];


$sql="INSERT INTO mahasiswa (nim_mahasiswa, nama_mahasiswa, id_angkatan) VALUES('$nim_mahasiswa','$nama_mahasiswa','$id_angkatan')";
mysql_query($sql);
header( "Location: admin_menumahasiswa.php" ) ;
?>
