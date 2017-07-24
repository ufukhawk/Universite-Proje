
<form action="" method="POST">
kulladi:<input type="text" name="user"/><br>
sifre:<input type="password" name="pass"/><br>
<input type="submit" name="Giris yap!"/>
</form>

<?php 
include  'database.php';
if ($_POST)
{
	$kuladi=$_POST['user'];
	$sifre=$_POST['pass'];
	$konrol=$db->prepare("SELECT * FROM WHERE user = ? && sifre = ?");
$konrol->bindParam(1,$kuladi);
$konrol->bindParam(2,$sifre);
	$konrol->execute();

	if ($kontrol->rowCount()==1) {
		header("location:giris.php");
	}
	else{
		echo "olmadı";
	}
}
	else
	{
		echo "nanananana";
	}
 ?>