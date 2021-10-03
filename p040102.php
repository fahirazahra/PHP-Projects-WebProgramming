<!--Praktikum 3.1.2-->

<?php
    function buatBintangReverse($n){
        $jumlahBintang = $n;
        for($X = 1; $X <= $jumlahBintang; ++$X){
        for($Y = $jumlahBintang; $Y >= $X; $Y-=1){
            echo "*";
        }
        echo "<br>";
        }
    }        
    buatBintangReverse(4);
    buatBintangReverse(5);
?>