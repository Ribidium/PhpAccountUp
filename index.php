<?php
session_start();


require __DIR__.'/baglanti/baglanti.php';
require __DIR__.'/kutuphaneler/kutuphaneler.php';
require __DIR__.'/kutuphaneler/uyelik.php';

@$gelenDegisken = $_GET['sayfa'];

$kutuphane = new Kutuphane(); //proje kütüphanesi
$uyelikSistemi = new UyelikSistemi(); //üyelik kütüphanesi

if(!empty($_SESSION['kul_id'])){
    //oturum açan kullanıcıların bilgileri getirilecek
    $kullaniciBilgi = $uyelikSistemi->KulBilgi($_SESSION['kul_id']);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proje 3 - Böte Bölümü</title>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <script type="text/javascript" src="js/proje3.js"></script>
    <link rel="stylesheet" href="css/semantic.min.css" type="text/css">
    <link rel="stylesheet" href="css/proje3.css" type="text/css">
</head>
<body>
    <div class="ui padded grid ust">
        <div class="two wide column asd">
            Uşak Üniversitesi
        </div>
        <div class="twelve wide column ust_buton">
            <a href="?sayfa=2">
            <button class="ui green button">Kullanıcı Girişi</button>
            </a>
            <a href="?sayfa=3">
            <button class="ui orange button">Yeni Kayıt</button>
            </a>
        </div>
        <div class="two wide column"></div>
    </div>
    <div class="ui padded grid logo">
        <div class="two wide column"></div>
        <div class="twelve wide column logo_orta">
            <img class="ui middle aligned rounded image resim" src="resimler/kahve.png" width="160">
            <span class="baslik resim">Böte Bölümü - Kod Geliştirme</span>
        </div>
        <div class="two wide column"></div>
    </div>
    <div class="ui padded grid menuler">
        <div class="two wide column"></div>
        <div class="twelve wide column menuler_orta">
            <div class="orange ui buttons">
                <a href="?">
                <button class="ui button">Ana Sayfa</button>
                </a>
                <a href="?sayfa=1">
                <button class="ui button">Programlar</button>
                </a>
                <button class="ui button" id="resim_buton">Resim Geçişi</button>
            </div>
        </div>
        <div class="two wide column"></div>
    </div>

    <div class="ui padded grid resimler">
        <div class="two wide column"></div>
        <div class="twelve wide column resimler_orta">
            <?php include 'islem/resimgecis.php'; ?>
        </div>
        <div class="two wide column"></div>
    </div>

    <div class="ui padded grid orta">
        <div class="two wide column"></div>
        <div class="twelve wide column orta_orta">
            <?php include 'islem/islem.php';?>
        </div>
        <div class="two wide column"></div>
    </div>
    <div class="ui padded grid alt">
        <div class="two wide column"></div>
        <div class="twelve wide column">

        </div>
        <div class="two wide column"></div>
    </div>
</body>
</html>