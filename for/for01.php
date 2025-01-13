<?php
echo "Masukkan nilai awal";
$awal = trim(fgets(STDIN));

echo "Masukkan nilai Akhir";
$awal = trim(fgets(STDIN));

for($awal; $awal<=$akhir; $awal++){
    echo "Antrian ke-$awal \n";
}
?>