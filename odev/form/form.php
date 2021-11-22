<?php 

array_map(function($e) {
    if ($e == "") {
        echo "Lütfen bir sayı giriniz.";
    }
    elseif ($e % 3 == 0) {
        echo "Girdiğiniz sayı 3'e bölünebilir.";
    }
    elseif ($e % 3 == 1){
        $s = $e + 2;
        echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı $s'dır.";
    }
    else{
        $s = $e + 1;
        echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı $s'dır.";
    }
}, $_POST)

?>
