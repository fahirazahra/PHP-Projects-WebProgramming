<!--Praktikum 1.1-->

<!DOCTYPE html>
<html>
     <head>Contoh</head>
     <body>
          <h1>Latihan 1</h1>
          <?php
          echo "Hello world"; //Seharusnya tidak perlu menggunakan <p></p>.
          ?>
          
          <h1>Latihan 2</h1>
          <?php
          $a = '14';
          $b = '11';
          $c = $a + $b;
          echo "Hasil perhitungan adalah " . $c; //Tambahkan titik (.) untuk menggabungkan dua tipe data. Dan tambahkan tanda petik pada tipe data string.
          ?>
          
          <h1>Latihan 3</h1>
          <?php
          $z = ["Nama"=>"Agus", "NIM"=>"K1424567", "Alamat"=>"Solo", "Bidang"=>"RPL"]; //Pada array, gunakan tanda => untuk menggabungkan key & value (karena kalau -> adalah untuk class) dan di setiap key & value-nya harus diberikan tanda petik.
          echo $z["Nama"]
          ?>
          
          <h1>Latihan 4</h1>
          <?php
          $objek = '{
               "name": "Steven William",
               "age": 30,
               "city": "Kartosuro"
          }';
          
          $biodata = json_decode($objek); //Jika ingin menguraikan JSON ke suatu objek di PHP, setiap key & value-nya harus diawali dan diakhiri dengan tanda {}. Dan juga menggunakan rumus json_decode($variabel).
          
          echo "Name : {$biodata->name} <br>";
          echo "Age : {$biodata->age} <br>";
          echo "City : {$biodata->city} <br>";
          ?>
     </body>
</html>