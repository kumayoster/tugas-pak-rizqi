<?php include 'fungsi.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zodiac</title>
</head>
<body>
  <h1>Zodiac = <?php 
  echo $x->cek_zodiac(
    $x->cek_data("tgl"),
    $x->cek_data("bulan")
    );
  ?></h1>
  <form action="" method="get">
    <label>Bulan</label>
    <select name="bulan">
      <option value="1">Januari</option>
      <option value="2">Februari</option>
      <option value="3">Maret</option>
      <option value="4">April</option>
      <option value="5">Mei</option>
      <option value="6">Juni</option>
      <option value="7">Juli</option>
      <option value="8">Agustus</option>
      <option value="9">September</option>
      <option value="10">Oktober</option>
      <option value="11">November</option>
      <option value="12">Desember</option
    </select>
    <br>
    <label>tanggal</label>
    <input type="number" name="tgl" value="masukan tanggalnya">
    <input type="submit" value="cek kartu tarot">
  </form>
</body>
</html>