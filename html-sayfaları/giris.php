<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css-sayfaları/giris-2.css">
    <link rel="stylesheet" href="../css-sayfaları/bootstrap.min.css">
</head>
<body class="bg-danger" >
    <div class="container mx-auto bg-primary">
        <div class="row fs-3 text-center text-white">
            <div class="col-sm-12">
            <?php
                $kullanici_adi = $_POST['name-surname'];
                $eposta  = $_POST['mail-adress'];
                $sifre = $_POST['pass'];

                if(substr($eposta, 0, strlen($sifre)) == $sifre)
                {
                   echo "AD SOYAD : " . $kullanici_adi."<br>";
                   echo "MAİL ADD : ".$eposta."<br>";
                   echo "HOŞGELDİNİZ ". strtoupper($kullanici_adi)."<br>";
                   echo "<b>5 sn hakkında sayfasına yöneleceksiniz</b>";
                   header("refresh: 5; url = hakkinda.html"); 
                }
                else
                {
                    echo "!!!şifreniz hatalıdır!!!<br>";
                    echo "!!!şifreniz, mail adresinizin ilk kısmı ile aynı olmalıdır!!!<br>";
                    echo "<b>3 saniye içerisinde giriş sayfasına yöneleceksiniz...</b>";
                    header("refresh: 3; url = giris.html");
                }
            ?>
            </div>
        </div>
    </div>
</body>
</html>