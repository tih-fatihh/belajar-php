<?php
echo "Masukkan nama : ";
$nama = trim (fgets(STDIN));

function sapa($nama){
echo "Selamat pagi $nama".PHP_EOL;
}

sapa($nama);
?>