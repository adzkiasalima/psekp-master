<?php

session_start();


include_once "../db_connect.php";


	if(isset($_POST['btnweblogin'])){
		$reg = $_POST['web_reg'];
		$pass = $_POST['web_pwd'];
		$passwordna = md5($pass);
		
		
			
			$pilihlah = "SELECT * FROM psekp_pkl.webuser
						WHERE name = '$reg' AND password = '$passwordna'";
			$kemudian = mysql_query($pilihlah, $koneksi);
			$num = mysql_num_rows($kemudian);
			if($num  == 0)
			{
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
			exit ();
			}
			if($num  == 1)
			{
			$cek = mysql_fetch_array($kemudian);
			$_SESSION['userna'] = $cek['id_registry'];
			$_SESSION['ngaranna'] = $cek['name'];
			$_SESSION['otentik'] = 'ibrahim2005';
			echo "<meta http-equiv='refresh' content='0; url=../../pages/database.php'>";
					exit ();
		}
	}
?>
