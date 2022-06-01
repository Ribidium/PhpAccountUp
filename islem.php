<?php
switch ($gelenDegisken){
    case 1:
        include 'islem/program.php';
        break;
    case 2:
        include 'islem/giris.php';
        break;
    case 3:
        include 'islem/uyekayit.php';
        break;
    default:
        echo "varsayılan durum";
        break;
}