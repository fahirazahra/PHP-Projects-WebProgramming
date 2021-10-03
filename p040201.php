<!--Praktikum 3.2.1-->

<!DOCTYPE html>
<html>
<body>
   <h1><?php echo "Menghitung Gaji Karyawan"; ?></h1>
   <?php
      function hitungGaji($gol, $masaKerja){
         switch($gol){
            case "A":
               if($masaKerja < 10){
                  $gaji = 5000000;
               }
               else {
                  $gaji = 7000000;
               }
               break;

            case "B":
               if($masaKerja >= 10){
                  $gaji = 8000000;
               }
               else {
                  $gaji = 6000000;
               }
               break;
         }
         return $gaji;
      }

      $GajiKaryawanA_1 = hitungGaji("A", 9);
      $GajiKaryawanA_2 = hitungGaji("A", 10);
      $GajiKaryawanB_1 = hitungGaji("B", 9);
      $GajiKaryawanB_2 = hitungGaji("B", 10);

      echo ("Gaji Karyawan Golongan A dengan Masa Kerja kurang dari 10 tahun adalah sebesar Rp" . $GajiKaryawanA_1 . "<br>");
      echo ("Gaji Karyawan Golongan A dengan Masa Kerja lebih dari sama dengan 10 tahun adalah sebesar Rp" . $GajiKaryawanA_2 . "<br>");
      echo ("Gaji Karyawan Golongan B dengan Masa Kerja kurang dari 10 tahun adalah sebesar Rp" . $GajiKaryawanB_1 . "<br>");
      echo ("Gaji Karyawan Golongan B dengan Masa Kerja lebih dari sama dengan 10 tahun adalah sebesar Rp" . $GajiKaryawanB_2);
   ?>
</body>
</html>