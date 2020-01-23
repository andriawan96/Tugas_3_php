<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tugas 3</title>
  </head>
  <body>
    <h2>Tugas 3 PHP</h2>
      <p>1. Jarak antara kota A – Z 360 km. Jika ditempuh dengan sepeda motor <br>
        berkecepatan 90 km/jam maka lama perjalanan...
      </p>
    <h2>Jawabannya :</h2>
      <p>
        Jarak kota A - Z = 360 Km<br>
        Kecepatan motor = 90
        Waktu tempuh = ?<br>

        <?php
            $jarak = 360;
            $kecepatan = 90;

            //perkalian waktu dan $tenaga
            $lama_perjalanan = $jarak / $kecepatan;
         echo "Jawaban : $lama_perjalanan Menit";
         ?>
      </p>
      <p>2. Defan menabung di Bank Rp. 150.000. Bunga 1 tahunnya adalah 12,5 %. <br>
        Maka jumlah tabungan Defan setelah 1 tahun adalah…<br>
        <h2>Jawabannya :</h2><br>
      <p>
        Tabungan Awal = Rp 150000<br>
        Bunga Setahun = 12.5%<br>
        Total Tabungan Setahun = ?<br>
      </p>
        <?php
          $tabawal = 150000;
          $tabtahun = $tabawal * 12;
          $tottabungan = $tabtahun / 100 * 12.5 + $tabtahun;
          echo "Jawaban : Rp $tottabungan";
         ?>
      </p>
  </body>
</html>
