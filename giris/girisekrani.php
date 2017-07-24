<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="" method="post">
          <input type="hidden" name="kayit" value="1" />
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="name" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="soyad" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="mail" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pass" />
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="#" method="post">
          <input type="hidden" name="giris" value="1" />
          
            <div class="field-wrap">
            <label>
              kulladni<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
<?php
include  "../database.php";

 
if ($_SERVER['REQUEST_METHOD'] == "POST"){
  if (isset($_POST['kayit']) AND $_POST['kayit'] == "1") {
        $kullaniciAdi = trim(strip_tags($_POST['name']));
        $sifre  = (trim(strip_tags($_POST['pass'])));
        $mail = trim(strip_tags($_POST['mail']));
        $soyad  = (trim(strip_tags($_POST['soyad'])));
            if (empty($kullaniciAdi) OR empty($sifre) OR empty($mail) OR empty($soyad))  {
                echo 'Boş Alan Bırakmayın !';
            }else{
                $uyegiris = $db->prepare("INSERT INTO kullanici(isim, sifre, email, soyad) VALUES(?, ?, ?, ?)");
                $uyegiris->execute(array($kullaniciAdi,$sifre,$mail,$soyad));

                   //$_SESSION["UyeId"] = $uyeIdsi;//Session Oluşturuyoruz.
                   $_SESSION['Kullanici'] = $kullaniciAdi;
                   //Burada index.php Sayfasına Yönlendiriyoruz.
                  echo '<script>window.location.replace("http://localhost:/blog_html/index.php")</script>';
                   //echo '<script>window.location.replace("http://localhost:/blog_html/index.php")</script>';
                }

  }
  elseif  ($_POST['giris'] == "1") {
   
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
                  echo '<script>alert("üye ol");</script>'; 
                }
            }
     }
  }
}
?>