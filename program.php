<?php
$programlar = $kutuphane ->ProgramListesi();

foreach ($programlar as $key => $deger) {
    echo $deger->program_adi;
    echo "<br>";
}


?>