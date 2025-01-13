<?php
echo "Masukkan nilai anda : ";
$nilai = trim(fgets(STDIN));

if($nilai<=0){
    echo "Maaf kamu belum ujian";
}
if($nilai<60){
    echo "Nilai : $nilai\n";
    echo "Grade : E";
}elseif($nilai<70){
    echo "Nilai : $nilai\n";
    echo "Grade : D"; 
}elseif($nilai<80){
    echo "Nilai : $nilai\n";
    echo "Grade : C";
}elseif($nilai<90){
    echo "Nilai : $nilai\n";
    echo "Grade : B";
}elseif($nilai<100){
    echo "Grade : A";
}else{
    echo "Maaf nilai tidak sah";
}
?>