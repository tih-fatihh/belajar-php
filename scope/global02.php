<?php
$nama = "Fatih nilai kamu"; 
$nilai = 100;

function tampilnilai(){
    global $nama, $nilai;
    echo $nama . $nilai;
}

tampilnilai();
?>