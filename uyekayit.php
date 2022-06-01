<?php

if(!empty($_SESSION['kul_id'])){
    //oturum artık açıldı.
    include "islem/uyebilgi.php";
}else{
    if(!empty($_POST['kaydet'])){
        //kaydet butonuna basıldıysa
        $adi =$_POST['adi'];
        $soyadi =$_POST['soyadi'];
        $kadi =$_POST['kadi'];
        $sifre =$_POST['sifre'];

        $kontrol = $uyelikSistemi ->UyeKayit($adi,$soyadi,$kadi,$sifre);
    }

    ?>
<div class="ui input focus">
    <form action="?sayfa=3" method="POST" onsubmit="return FormKontrol()" name="uye_kayit">
        Adınız: <input type="text" name="adi" placeholder="Adınız..."><br><br>
        Soyadınız: <input type="text" name="soyadi" placeholder="Soyadınız..."><br><br>
        Kullanıcı Adınız: <input type="text" name="kadi" placeholder="Kullanıcı Adınız..."><br><br>
        Şifreniz: <input type="password" name="sifre" placeholder="Sifreniz..."><br><br>
        <button class="ui inverted orange button" <input type="submit" name="kaydet" value="Kaydet">Kaydet</button>
</div>

    </form>

<?php } ?>




