<!--Praktikum 5.2-->

<?php

    $namaPegawai = $_POST['namaPegawai'];
    $kinerja = $_POST['kinerja'];
    $jabatan = $_POST['jabatan'];

    switch($jabatan) {
        case 'programmerJr':
            $gaji = 4000000;

            if($kinerja <= 50){
                $gaji = $gaji * (50/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Junior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 51 && $kinerja <=60){
                $gaji = $gaji * (60/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Junior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 61 && $kinerja <=70){
                $gaji = $gaji * (70/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Junior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 71 && $kinerja <=80){
                $gaji = $gaji * (80/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Junior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 81 && $kinerja <=90){
                $gaji = $gaji * (90/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Junior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 91 && $kinerja <=100){
                $gaji = $gaji * (100/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Junior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }
        break;

        case 'programmerSr':
            $gaji = 6000000;

            if($kinerja <= 50){
                $gaji = $gaji * (50/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Senior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 51 && $kinerja <=60){
                $gaji = $gaji * (60/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Senior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 61 && $kinerja <=70){
                $gaji = $gaji * (70/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Senior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 71 && $kinerja <=80){
                $gaji = $gaji * (80/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Senior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 81 && $kinerja <=90){
                $gaji = $gaji * (90/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Senior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 91 && $kinerja <=100){
                $gaji = $gaji * (100/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Senior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }
        break;

        case 'CTO':
            $gaji = 8000000;

            if($kinerja <= 50){
                $gaji = $gaji * (50/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Chief Technology Officer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 51 && $kinerja <=60){
                $gaji = $gaji * (60/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Chief Technology Officer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 61 && $kinerja <=70){
                $gaji = $gaji * (70/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Chief Technology Officer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 71 && $kinerja <=80){
                $gaji = $gaji * (80/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Chief Technology Officer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 81 && $kinerja <=90){
                $gaji = $gaji * (90/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Chief Technology Officer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 91 && $kinerja <=100){
                $gaji = $gaji * (100/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Junior Programmer" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }
        break;

        case 'manager':
            $gaji = 10000000;

            if($kinerja <= 50){
                $gaji = $gaji * (50/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Manager" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 51 && $kinerja <=60){
                $gaji = $gaji * (60/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Manager" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 61 && $kinerja <=70){
                $gaji = $gaji * (70/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Manager" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 71 && $kinerja <=80){
                $gaji = $gaji * (80/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Manager" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 81 && $kinerja <=90){
                $gaji = $gaji * (90/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Manager" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }elseif($kinerja >= 91 && $kinerja <=100){
                $gaji = $gaji * (100/100);
                echo "Nama : " . $namaPegawai . "<br>" . "Jabatan : Manager" . "<br>" . "Kinerja : " . $kinerja . "<br>" . "Gaji : " . "Rp" . $gaji.",-";
            }
        break;
    }
    
?>