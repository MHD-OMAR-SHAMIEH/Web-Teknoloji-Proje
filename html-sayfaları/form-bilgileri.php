<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css-sayfaları/bootstrap.min.css">
    
</head>
<body class="bg-danger bg-opacity-75">
    <header>
        <div class="container bg-success bg-opacity-75">
            <div class="row text-center fs-1">
                Bilgileriniz Başarılı Bir Şekilde Gönderilmiştir
            </div>
            <div class="row fs-3 text-center">En kısa sürede size cevap verilecektir</div>
        </div>
    </header>
    <div class="container bg-info">
        <div class="row p-3">
            <div class="col-sm-6 text-center fw-bolder fs-3 text-danger" >isim</div>
            <div class="col-sm-6 fs-5">
                <?php
                    echo $_POST["ad"];
                ?>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-sm-6 text-center fs-3 fw-bolder text-danger"  >soyisim</div>
            <div class="col-sm-6 fs-5">
                <?php
                    echo $_POST["soyad"];
                ?>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-sm-6 text-center fs-3 fw-bolder text-danger">eposta</div>
            <div class="col-sm-6 fs-5">
                <?php
                    echo $_POST["eposta"];
                ?>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-sm-6 text-center fs-3 fw-bolder text-danger">şifre</div>
            <div class="col-sm-6 fs-5">
                <?php
                    echo $_POST["sifre"];
                ?>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-sm-6 text-center fs-3 fw-bolder text-danger" >cinsiyet</div>
            <div class="col-sm-6 fs-5">
                <?php
                    echo $_POST["cinsiyet"];
                ?>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-sm-6 text-center fs-3 fw-bolder text-danger" >okul</div>
            <div class="col-sm-6 fs-5">
                <?php
                echo $_POST["universite"];
                ?>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-sm-6 text-center fs-3 fw-bolder text-danger" >form şekli</div>
            <div class="col-sm-6 fs-5">
                <?php
                    echo $_POST["form-tipi"];
                ?>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-sm-6 text-center fs-3 fw-bolder text-danger" >ilgili dersler</div>
            <div class="col-sm-6 fs-5">
                <?php
                    echo $_POST["ders"];
                ?>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-sm-6 text-center fs-3 fw-bolder text-black">MESAJINIZ</div>
        </div>
        <div class="row p-4 bg-light text-center border rounded border-3 border-dark fs-4">
            <?php
                echo $_POST["mesaj"];
            ?>
        </div>
    </div>
    <footer>
        <div class="row p-5 bg-black">
            <div class="col-sm-4 text-center">
                <a href="Ana-Sayfa.html" class="text-decoration-none text-light fs-2">ANA SAYFA</a>
            </div>
            <div class="col-sm-4 text-center">
                <a href="iletisim.html" class="text-decoration-none fs-2 text-light">İLETİŞİM</a>
            </div>
            <div class="col-sm-4 text-center">
            <a href="hakkinda.html" class="text-decoration-none text-light fs-2">HAKKINDA</a>
            </div>
        </div>
    </footer>
</body>
</html>