<?php

class Kutuphane{

    public function ProgramListesi(){ //listeleme
        try{
            $vt = Vt();
            $sorgu = $vt->prepare("SELECT * FROM programlar");
            $sorgu->execute();
            if ($sorgu){
                return $sorgu->fetchAll(PDO::FETCH_OBJ);
            }
        }catch (exception $e){
            return 'Tablo hatası';


        }


    }


}

?>