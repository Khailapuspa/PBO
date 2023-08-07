<?php
class perhitungan{
    var $bil1, $bil2, $bil3;

    function luasPersegi($bil1){
        $sisi=$bil1;
        $luas=$sisi*$sisi;
        return "Sisi =" .$sisi."<br> luas =" .$sisi."x".$sisi." <br> Hasil =".$luas;
    }

    function luasPersegiPanjang($bil1,$bil2){
        $panjang=$bil1;
        $lebar=$bil2;
        $bil3=$panjang*$lebar;
        return "Panjang =" .$panjang."<br> Lebar =" .$lebar."<br> luas =".$panjang."x".$lebar." <br> Hasil =".$bil3;
    }

    function luasSegitiga($bil1,$bil2){
        $alas=$bil1;
        $tinggi=$bil2;
        $bil3=$alas*$tinggi/2;
        return "Alas =" .$alas."<br> Tinggi =" .$tinggi."<br> luas =".$alas."x".$tinggi.":2 <br> Hasil =".$bil3;
    }

}

?>