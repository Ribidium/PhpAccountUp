<?php
define('SUNUCU', 'localhost');
define('KULLANICI_ADI', 'root');
define('PAROLA', '');
define('VERITABANI', 'uyelik_sistemi');

function Vt(){
    try {
        $vt = new PDO('mysql:host='.SUNUCU.';dbname='.VERITABANI.';charset=utf8',KULLANICI_ADI,PAROLA);
        return $vt;

    } catch (Exception $e){
        return 'Veritabanı hatası';
    }
}
?>