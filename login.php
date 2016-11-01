<?php
session_start();
if(isset($_POST['nappi'])) {
	$oikeatunnus="jeppe";
	$oikeasalasana="test";
	if($_POST['tunnus']==$oikeatunnus) {
		if($_POST['salasana']==$oikeasalasana) {
			//oikea tunnus ja salasana
			$_SESSION['kirjautunut']=TRUE;
			$_SESSION['user']=$oikeatunnus;
			header('Location:oma.php');
		}
		else {
			echo "Tunnus ja salasana eivät täsmää";
		}
	}
	else {
		echo "Tunnus ja salasana eivät täsmää";
	}
}
?>

<?php include "menu.php";?>
<form method="post" action="login.php">
<table border=0>
	<tr><td>tunnus</td> <td><input type="text" name="tunnus"></td></tr>
	<tr><td>salasana</td> <td><input type="password" name="salasana"></td></tr>
	<tr><td></td><td><input type="submit" name="nappi" value="Kirjaudu"></td></tr>
</table>
</form>



<?php include "footer.php";?>