<?php
$siswa = [
    "siswa1"=>[
    "nama"=> "Nata decoco",
    "kelas"=> 12
],
    "siswa2"=>[
    "nama"=> "Nata decoco",
    "kelas"=> 10
]
]; 

foreach($siswa as $murid => $santri){
    echo strtoupper($murid).PHP_EOL;
    foreach($santri as $data => $sisi){
        echo ucwords($data)." : ". $sisi . PHP_EOL;
    }
}
?>