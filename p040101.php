<!--Praktikum 3.1.1-->

<?php
    function buatBintang($n){
        $jumlahBintang = $n;
        for($X = $jumlahBintang; $X > 0; --$X){
        for($Y = $jumlahBintang; $Y >= $X; --$Y){
            echo "*";
        }
        echo "<br>";
        }
    }        
    buatBintang(4);
    buatBintang(5);
?>