
<!DOCTYPE html>
<html>
<head>
	<title>uye</title>
</head>
<body>
<form action="" method="POST">
kulladi:<input type="text" name="username"/><br>
sifre:<input type="password" name="password"/><br>
<input type="submit" name="Kaydet!"/>
</form>
</body>
</html>

<?php 
include  'database.php';
if ($_POST)
{
	$kuladi=$_POST['username'];
	$sifre=$_POST['password'];
	echo "INSERT into kullanici(isim,sifre) values ('$kuladi','$sifre')";
	$kaydet=$db->query("INSERT into kullanici(isim,sifre) values ('$kuladi','$sifre')");
	if (!$kaydet) {
		echo "olmadı";
	}else
	{
		header("location:giris.php");
	}
}
 ?>