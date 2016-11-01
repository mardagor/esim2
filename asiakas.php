<?php include "menu.php";?>
<h1>Asiakkaat</h1>
<?php
include "yhteys.php";
$sql="SELECT etunimi,sukunimi FROM asiakkaat";
$asiakkaat=$db->query($sql);
	echo "<TABLE border=1>";
	echo "<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>";

 {

	foreach ($asiakkaat as $rivi) {
		echo '<tr><td>'.$rivi['etunimi'].'</td><td> '.$rivi['sukunimi'].'</td></tr>';
	}
}
echo "</TABLE>";


?>

<?php include "footer.php";?>