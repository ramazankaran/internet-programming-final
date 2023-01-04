<?php 

include("baglanti.php");


if(isset($_POST["kaydet"]))
{

if(empty($_POST["kullaniciadi"]))
{
  
}

    $name=$_POST["kullaniciadi"];
    $email=$_POST["email"];
    $password=password_hash($_POST["parola"], PASSWORD_DEFAULT);

    $ekle="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$name','$email','$password')";
    $calistirekle = mysqli_query($baglan,$ekle);
    
    if ($calistirekle)
    {
        echo '<div class="alert alert-success" role="alert">
        KAYIT BAŞARILI
      </div>';
    }
    else
    {
        echo '<div class="alert alert-danger" role="alert">
        Kayıtta bir hata oluştu.
      </div>';


    }
    mysqli_close($baglan);

}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ÜYE KAYIT</title>
  </head>
  <body>
    <div class="container p-5">
        <div class="card p-5">

        <form action="kayit.php" method="POST">

        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kullanıcı ADI</label>
    <input type="text" class="form-control " id="exampleInputEmail1"  name="kullaniciadi">
  
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control " id="exampleInputEmail1" name="email">
  
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
   <input type="password" class="form-control " id="exampleInputPassword1" name="parola">
  
    </div>
  </div>



  <button type="submit" name="kaydet"class="btn btn-primary">KAYDET</button>
</form>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>