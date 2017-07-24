<div class="logincss">
    <form action="" method="post">
        <label>Üye Giriş Formu</label><br>
        <input type="text" name="username" placeholder="Üye Ad"/><br>
        <input type="password" name="password" placeholder="Şifre"/><br>
        <button type="submit">Giriş</button>
    </form>
</div>
<?php
include  "database.php";
     if ($_POST) {
        $kullaniciAdi = trim(strip_tags($_POST['username']));
        $sifre  = (trim(strip_tags($_POST['password'])));
            if (empty($kullaniciAdi) || empty($sifre)) {
                echo 'Boş Alan Bırakmayın !';
            }else{
                $uyegiris = $db->prepare("SELECT * FROM kullanici WHERE isim=? AND sifre=? ");
                $uyegiris->execute(array($kullaniciAdi,$sifre));
                if($uyegiris->rowCount()){
                    foreach ($uyegiris as $uyebilgi) {
                       $uyeIdsi = $uyebilgi['id'];
                       $uyead   = $uyebilgi['isim'];
                   }
                   $_SESSION["UyeId"] = $uyeIdsi;//Session Oluşturuyoruz.
                   $_SESSION['Kullanici'] = $uyead;
                   //Burada index.php Sayfasına Yönlendiriyoruz.
                   echo '<script>window.location.replace("http://localhost:/blog_html/index.php")</script>';
                }else{
                   echo 'Hata !';
                }
            }
     }
?>