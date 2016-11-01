<?php
$palvelin="mysql:host=localhost; dbname=esim2";
try {
	$db=new PDO($palvelin,"phpuser","phppass");
	// echo "Yhteys OK";
	$testi=true;
} catch (Exception $e) {
	echo "Tietokantaan ei saatu yhteyttä, ota yhteys ylläpitoon";
	$testi=false;
}



?>