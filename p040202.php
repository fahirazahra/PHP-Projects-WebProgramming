<!--Praktikum 3.2.2-->

<!DOCTYPE html>
<html>
<body>
   <h1><?php echo "Menghitung Denda Peminjaman Buku"; ?></h1>
   <?php
        function hitungDenda($tglHarusKembali, $tglKembali){
            $tglPengembalian = new datetime($tglHarusKembali);
            $tglDikembalikan = new datetime($tglKembali);
            $dendaKeterlambatan = 5000;
            $jumlah_hari_terlambat = $tglDikembalikan
            -> diff($tglPengembalian) -> days;
            $denda = ($jumlah_hari_terlambat*$dendaKeterlambatan);
            
            return $denda;
        }
        echo "Besarnya denda adalah: Rp" . hitungDenda('2021-01-03', '2021-01-05');
    ?>
</body>
</html>