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
         <section id="anasayfa">
             <div id="black">


             </div>

        
             <div id="icerik">
                <h2>KaranGYM</h2>
                
                <hr width=300 align=left>
                <p>Sağlıklı Yaşam İçin Vazgeçilmez Durağınız..</p>
             </div>
         </section>

         <section id="hakkimizda"> 

                <h3>Hakkımızda</h3>
                <div class="container">
                        <div id="sol">
                                <h5 id="h5sol">
                                        Daima Spor
                                        Mutlaka Sağlık 
                                        Her zaman Kondisyon
                                </h5>
                        </div>
                        <div id="sag">
                                <span>E</span>
                                <p id="psag">n yeni teknolojiler ve spor ekipmanlarıyla, spor deneyimini bir adım ileri taşı!
                                        Profesyonel eğitmenler ile birlikte antrenman yap, maksimum verim al.
                                        İster kulüpte ister açık havada hayalindeki sağlıklı ve fit yaşam için
                                        KaranGYM her zaman seninle.</p>
                        </div>

                        <img src="img/gorsel2.jpg" alt=""
                        class="img-fluid mt100">

                        <p id="pson">Salonumuzda Daima Cengiz Kurtoğlu çalmaktadır. </p>


                </div>



         </section>
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

          <section id="ekip">   
                <div class="container">
                        <h3 id="ekiph3">Ekip</h3>
                        <div class="sutun-sol-sag">
                        <img src="img/gorsel6.jpg" alt="" class="img-fluid oval">
                        <h4 class="ekipisim">Tom Hardy</h4> 
                        <p class="ekipp"> Bir Söylentiye Göre Murat Hoca ve Venom Kavga Etmiş Ve Kaybeden Siyah Renk Olmuş.

                        </p>
                        <div class="ekip-ikon"> 
                                <a href="https://www.instagram.com/tomhardy/"><i class="fa-brands fa-instagram social"></i></a>
                                <a href="https://www.imdb.com/name/nm0362766/"><i class="fa-solid fa-phone social"></i></a>
                                <a href="https://contactdetailswala.com/entertainment/tom-hardy-contact-details/"><i class="fa-solid fa-envelope social"></i></a>
                        </div>

                        

                </div>

                

          </section>
          <section id="iletisim">
                <div class="container"> 
                        <h3 id="h3iletisim">İletişim</h3>

                        <form action="index.php" method="post">
                        <div id="iletisimopak">
                                <div id="formgroup">
                                        <div id="solform">
                                                <input type="text" 
                                                name="isim"
                                                placeholder="Ad Soyad" required class="form-control">
                                                <input type="text" 
                                                name="tel" placeholder="Telefon Numarası" required class="form-control">
                                        </div>
                                        <div id="sagform">
                                                <input type="email" 
                                                name="mail"
                                                placeholder="Email Adresiniz" required class="form-control">
                                                <input type="text" 
                                                name="konu" placeholder="Konu Başlığı" required class="form-control">
                                        </div>
                                        <textarea name="mesaj"
                                        id="" cols="30"
                                        placeholder="Mesaj Giriniz" rows="10" required
                                        class="form-control"></textarea>

                                        <input type="submit"
                                        value="Gönder">
                                         </div>
                                        
                                <div id="adres">
                                       <h4 id="adresbaslik"> Adres :</h4>
                                       <p class="adresp">Gaziosmanpaşa Mah.</p>
                                       <p class="adresp">Cengiz Topel Caddesi</p>
                                       <p class="adresp">Altıeylül/BALIKESİR</p> 
                                       <p class="adresp">0547 586 1257</p>
                                       <p class="adresp">Email : tomhardy_10@gmail.com</p>


                                </div>
                                
                        </div>
                        </form>
                        <footer>

                                <div id="copyright">
                                        2023 Tüm Hakları Saklı Değildir. Bazıları Saklıdır.
                                        
                                </div>
                                <div id="socialfooter">
                                        <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                                        <a href="#"><i class="fa-solid fa-phone social"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope social"></i></a>  
                                </div>

                                <a href="#menu"><i class="fa-solid fa-up"></i></a>

                        </footer>


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