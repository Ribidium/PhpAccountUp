<?php
//oturumu kapat index.php dön
session_start();
unset($_SESSION['kul_id']);
header("location: ../index.php"); //dış klasöre çıkar
?>