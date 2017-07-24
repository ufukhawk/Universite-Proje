<?php
	 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	$db='proje';
	$db_kullanici='root';/*localhost üzerinde genellikle root kullanıcı adı girilir*/
	$db_sifre=''; /*localhost üzerinde genellikle şifre boş geçilir.*/
	$db = new PDO("mysql:host=localhost;dbname=$db;charset=utf8", $db_kullanici, $db_sifre);
?>