<?php
include_once "../moduls/db_connect.php";

	if(isset($_POST['daftarHakAkses']))
	{
		$nama = $_POST['nama'];
		$plain = $_POST['password'];
		$password = md5($plain);
		
		
		$simpan = "INSERT INTO psekp_pkl.webuser
					SET
						name = '$nama',
						password = '$password',
						plain = '$plain'";
		
		$kueri = mysql_query($simpan, $koneksi);

		$cari1 = "SELECT id_registry FROM pskep_pkl.webuser
					WHERE
					name = '$sklh'";
		$cuery1 = mysql_query($cari1, $koneksi);
		while($dicari = mysql_fetch_row($cuery1)){
			$id_sekolah = $dicari[0];
		}
		
	echo "<meta http-equiv='refresh' content='0; url=../index.html'>";
	}
?>