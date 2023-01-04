<!DOCTYPE html>
<html lang="tr">
<head> 
        <meta charset="UTF-8">
        <title>Anasayfa | KaranGYM</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/6329f6a5b9.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<?php require 'ustmenu.php' ?>


<section id="egitimler">
                <div class="container">

                        <h3>Eğitimler</h3>

                        <div>   

                                <div class="card">
                                <img src ="img/gorsel3.png" alt=""
                                class="img-fluid">
                                <h5 class="baslikcard">Fitness </h5>
                                <p class="cardp">Fitness ile sağlıklı yaşayın ve fit görünün.</p>
                                </div>
                                
                                <div class="card">
                                        <img src ="img/gorsel4.jpg" alt=""
                                        class="img-fluid">
                                        <h5 class="baslikcard">Boks </h5>
                                        <p class="cardp">Boks öğrenerek Mike Tyson'u dövebilirsiniz.</p>
                                        </div>

                                        <div class="card">
                                                <img src ="img/gorsel5.jpg" alt=""
                                                class="img-fluid">
                                                <h5 class="baslikcard">PowerLift </h5>
                                                <p class="cardp">Powerlift ile gücünüzün sınırlarını zorlayın ve Hulk'a Dönüşün.</p>
                                         </div>

                                                
                                
                                 
              
                        </div>
                </div>
</section>
</body>
</html>


<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
   $adsoyad=$_POST["isim"];
   $telefon=$_POST["tel"];
   $email=$_POST["mail"];
   $konu=$_POST["konu"];
   $mesaj=$_POST["mesaj"];

   $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";


   if($baglan->query($ekle)===TRUE)
   {
        echo "<script>alert('Mesajınız Gönderildi.')</script>";
   }
        else
        {
                echo "<script>alert('Mesajınız Gönderilmediiii!!! eyvah.')</script>";
        }

}


?>