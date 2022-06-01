<?php

class UyelikSistemi{

    public function checkUser($kadi,$sifre){

        try {
            $vt = Vt();
            $sorgu = $vt->prepare("SELECT * FROM kullanicilar WHERE kadi=:kadi2 AND ksifre=:ksifre2");

            $sorgu->bindParam("kadi2", $kadi, PDO::PARAM_STR);
            $sorgu->bindParam("ksifre2", $sifre, PDO::PARAM_STR);
            $sorgu->execute();

            if ($sorgu->rowCount() > 0) {
                $sonuc = $sorgu->fetch(PDO::FETCH_OBJ);
                return $sonuc;
            }
            return false;
        }catch (Exception $e){
            exit($e->getMessage());
        }
    }

    public function KulBilgi($kul_id){
        try {
            // kullanıcı id değerini vt gönder
            /*
                select sonrasında * yada sütün isimleri gelir. * tüm sütünlar
                fromÇ tablo ismi gelir
                where: kullanılmayabilir, ama kullanılırsa veri tabanı le
                ilgili şartlar yazılır.
            */
            $vt = Vt();
            $sorgu = $vt->prepare("SELECT * FROM kullanicilar WHERE id=:kid");
            // veritabanına giden verilerin güvenlik kontrolü
            $sorgu->bindParam("kid",$kul_id,PDO::PARAM_STR);
            $sorgu->execute();// çalıştırma
            if ($sorgu->rowCount() > 0) { // veritabanında geriye veri geliyor mu ?
                //kullanıcının bilgileri vardır,ve geri gönderiliyor
                return $sorgu->fetch(PDO::FETCH_OBJ);

            }else{
                return false;
            }

        } catch (Exception $e) {
            exit($e->getMessage());

        }

    }
    public function UyeKayit($adi,$soyadi,$kadi,$sifre){
        try {

            $vt= Vt();
            $sorgu = $vt->prepare("INSERT INTO kullanicilar (adi,soyadi,kadi,ksifre) VALUES (:a,:s,:k,:p)");
            $sorgu->bindParam("a",$adi,PDO::PARAM_STR);
            $sorgu->bindParam("s",$soyadi,PDO::PARAM_STR);
            $sorgu->bindParam("k",$kadi,PDO::PARAM_STR);
            $sorgu->bindParam("p",$sifre,PDO::PARAM_STR);
            $sorgu->execute();

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }
}

?>