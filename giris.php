<?php

if(!empty($_SESSION['kul_id'])){
    //oturum artık açıldı.
    include "islem/uyebilgi.php";
}else{
    if(!empty($_POST["gonder"])){
        $kulAdi = $_POST["kul_adi"];
        $parola = $_POST["sifre"];

        if($kulAdi=="" || $parola==""){
            echo "Kullanici adi veya sifre bos olamaz.";
        }else{
            $kontrol = $uyelikSistemi ->checkUser($kulAdi,$parola);
            //isset: değişkenin olup olmadığına bakar
            if(isset($kontrol->id)){
                // $_SESSION['kul_id'] = hash('SHA512', $kontrol->id);
                // $_SESSION['kul_id'] = rand($kontrol->id, 100000);
                $_SESSION['kul_id'] = $kontrol->id;
                header("location: ?sayfa=2");
            }else{
                echo "Kullanıcı adınız ya da şifreniz hatalı";
            }
        }
    }
    ?>
    <form action="?sayfa=2" method="POST">
    <div class="ui two column middle aligned very relaxed stackable grid">
        <div class="column">
            <div class="ui form">
                <div class="field">
                    <label>Kullanıcı Adı</label>
                    <div class="ui left icon input">
                        <input type="text" name="kul_adi" placeholder="Kullanıcı Adı">
                        <i class="user icon"></i>
                    </div>
                </div>
                <div class="field">
                    <label>Şifre</label>
                    <div class="ui left icon input">
                        <input type="password" name="sifre" placeholder="Şifre">
                        <i class="lock icon"></i>
                    </div>
                </div>
                <div class="ui blue submit button">
                    <label></label>
                    <input type="submit" name="gonder" value="Giriş"
                </div>

            </div>
        </div>

        </div>
    </form>

<?php } //elsenin bittiği parantez ?>

