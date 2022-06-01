<?php
//oturumu açılmışsa bu sayfaya girmek engelleniyor!
//güvenlik kontrolü
if (empty($_SESSION['kul_id'])) {
    header("Location: ../index.php");
    exit();
}
//oturum açılmamaışsa bu sayfaya girmek engelleniyor!
echo "Hoş Geldiniz: ".$kullaniciBilgi->adi." ".$kullaniciBilgi->soyadi;
?>
<br>
<a href="islem/cikis.php">Oturumu Kapat</a>