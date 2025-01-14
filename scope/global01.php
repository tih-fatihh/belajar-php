<?php
$nama="Fatih"; //variabel gloal

function sapa(){
    $orang = "Sehat"; // variabel local
    echo $orang;
}

sapa();
echo $nama;
?>