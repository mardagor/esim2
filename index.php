<?php
session_start();
$tunnus="Vieras";
if($_SESSION['kirjautunut']==TRUE)
{
	$tunnus=$_SESSION['user'];
}
?>

<?php include "menu.php" ?>


Tervetuloa <?php echo $tunnus;?>
<h1>Esimerkki2</h1>
<p>
Tällä sivustolla on harjoiteltu php-ohjelmointia ja css-tiedoston käyttöä.
</p>

<?php include "footer.php" ?>