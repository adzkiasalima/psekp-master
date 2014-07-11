<?php
// variabel yang bersifat umum dan terus dipake

// buat koneksi
$db = "psekp_pkl";
$host = "localhost";
$username = "root";
$password = "";

$koneksi = mysql_connect ($host, $username, $password, $db);

if(!$koneksi){
	die ("tidak tersambung ".mysql_error());
	exit ();
}
//echo "Koneksi ke server bisa di akses <br>";

$dtbase = mysql_select_db($db, $koneksi);
if(!$dtbase){
	die ("Database tidak bisa diakses ".mysql_error());
	exit ();
	
}
// echo "Database bisa diakses <br>";
 
?>