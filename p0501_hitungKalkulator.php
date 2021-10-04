<!--Praktikum 5.1-->

<?php

    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    $operasi = $_POST['operasi'];

    switch($operasi) {
        case 'tambah':
            $hasil = $bilangan1 + $bilangan2;
            echo $bilangan1 . " + " . $bilangan2 . " = " . $hasil;
        break;

        case 'kurang':
            $hasil = $bilangan1 - $bilangan2;
            echo $bilangan1 . " - " . $bilangan2 . " = " . $hasil;
        break;

        case 'kali':
            $hasil = $bilangan1 * $bilangan2;
            echo $bilangan1 . " × " . $bilangan2 . " = " . $hasil;
        break;

        case 'bagi':
            $hasil = $bilangan1 / $bilangan2;
            echo $bilangan1 . " ÷ " . $bilangan2 . " = " . $hasil;
        break;

        case 'pangkat':
            $hasil = pow($bilangan1, $bilangan2);
            echo $bilangan1 . " ^ " . $bilangan2 . " = " . $hasil;
        break;
    }
    
?>