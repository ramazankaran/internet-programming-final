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
