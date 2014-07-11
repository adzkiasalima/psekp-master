<?php
 include "../db_connect.php";
 
 $judul=$_POST["judul"];

 $result=mysql_query("SELECT * FROM pertanian where Propinsi like '%$judul%' ");
 $found=mysql_num_rows($result);
 
 if($found>0){
    while($row=mysql_fetch_array($result)){
    echo "<li>$row[Propinsi]</br>
            <a href=\"$row[Scope1]\">$row[Scope1]</a>
			<a href=\"$row[Scope2]\">$row[Scope2]</a>
			<a href=\"$row[Scope3]\">$row[Scope3]</a></li>";
    }   
 }else{
    echo "<li>Tidak ada artikel yang ditemukan <li>";
 }
?>