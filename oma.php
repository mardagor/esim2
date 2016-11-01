<?php
session_start();
if($_SESSION['kirjautunut'] != TRUE) {
	header('Location:login.php');
}
?>

<?php include "menu.php";?>
Hei olet kirjautunut
<br>
<a href="logout.php">Kirjaudu ulos</a>
<?php include "footer.php";?>