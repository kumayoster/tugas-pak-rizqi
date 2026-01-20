<?php

function cek_data($data){
  if(isset($_GET[$data]) ==  true){
    if($_GET[$data] == null){
      return null;
    }else{
      return $_GET[$data];
    }
  }
  else{
    return null;
  }
}


function hasil($a,$b){
  if(!isset($_GET[$a]) || !isset($_GET[$b]) || $_GET[$a] === "" || $_GET[$b] === "") {
    return "masukin dulu angkanya";
    }
  if(isset($_GET['tambah'])){
    return cek_data($a) + cek_data($b);
  }
  elseif(isset($_GET['kurang'])){
    return cek_data($a) - cek_data($b);
  }
  elseif(isset($_GET['kali'])){
    return cek_data($a) * cek_data($b);
  }
  elseif(isset($_GET['bagi'])){
    if(cek_data($b) == 0){
      return INF;
    }else{
      return cek_data($a) / cek_data($b);
    }
  }
  return null;
}

?>
<html>
  <head>
    <title>Kakulator using function</title>
  </head>
  <body>
    <h2>Angka Pertama = <?= cek_data('angka1')  ?></h2>
    <h2>Angka kedua = <?= cek_data('angka2') ?> </h2>
    <h2>hasil = <?= hasil('angka1', 'angka2') ?></h2>
    <hr>
    <form method="GET">
      <label>Angka Pertama</label>
      <br>
      <input type="number" name="angka1">
      <br>
      <label>Angka kedua</label>
      <br>
      <input type="number" name="angka2">
      <br>
      <input type="submit" value="tambah" name="tambah">
      <input type="submit" value="kurang" name="kurang">
      <input type="submit" value="bagi" name="bagi">
      <input type="submit" value="kali" name="kali">
    </form>
  </body>
</html>