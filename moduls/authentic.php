<?php
error_reporting(0);

session_start();
if (isset($_SESSION['userna'])){
	
	if($_SESSION['otentik']!= 'ibrahim2005'){
	echo "<meta http-equiv='refresh' content='0; url=index.html'>";
	exit;
	}
	
}
else 
{
	include "index.html";
	exit;
}
?>