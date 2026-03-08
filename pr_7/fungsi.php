<?php

class Zodiac{
  function cek_data($data){
   return (isset($_GET[$data])) ? ($_GET[$data] == NULL) ? 0 : $_GET[$data] : 0;
  }
  function cek_zodiac($tgl, $bulan){
    // Capricorn = 25 s.d 31 desember - 1 s.d 19 januari
    if(($tgl >= 21 && $tgl <= 31) && $bulan == 12){
      return "Capricorn";
    }elseif(($tgl >= 1 && $tgl <= 19) && $bulan == 1){
      return "Capricorn";
    }elseif(($tgl >= 20 && $tgl <= 31) && $bulan == 1){
      return "Aquarius";
    }elseif(($tgl >= 1 && $tgl <= 18) && $bulan == 2){
      return "Aquarius";
    }elseif(($tgl >= 19 && $tgl <= 28) && $bulan == 2){
      return "Pisces";
    }elseif(($tgl >= 1 && $tgl <= 20) && $bulan == 3){
      return "Pisces";
    }elseif(($tgl >= 21 && $tgl <= 31) && $bulan == 3){
      return "Aries";
    }elseif(($tgl >= 1 && $tgl <= 20) && $bulan == 4){
      return "Aries";
    }elseif(($tgl >= 20 && $tgl <= 31) && $bulan == 4){
      return "Taurus";
    }elseif(($tgl >= 1 && $tgl <= 20) && $bulan == 5){
      return "Taurus";
    }elseif(($tgl >= 21 && $tgl <= 31) && $bulan == 5){
      return "Gemini";
    }elseif(($tgl >= 1 && $tgl <= 20) && $bulan == 6){
      return "Gemini";
    }elseif(($tgl >= 21 && $tgl <= 31) && $bulan == 6){
      return "Cancer";
    }elseif(($tgl >= 1 && $tgl <= 22) && $bulan == 7){
      return "Cancer";
    }elseif(($tgl >= 23 && $tgl <= 31) && $bulan == 7){
      return "Leo";
    }elseif(($tgl >= 1 && $tgl <= 22) && $bulan == 8){
      return "Leo";
    }elseif(($tgl >= 23 && $tgl <= 31) && $bulan == 8){
      return "Virgo";
    }elseif(($tgl >= 1 && $tgl <= 22) && $bulan == 9){
      return "Virgo";
    }elseif(($tgl >= 23 && $tgl <= 31) && $bulan == 9){
      return "Libra";
    }elseif(($tgl >= 1 && $tgl <= 22) && $bulan == 10){
      return "Libra";
    }elseif(($tgl >= 23 && $tgl <= 31) && $bulan == 10){
      return "Scorpio";
    }elseif(($tgl >= 1 && $tgl <= 21) && $bulan == 11){
      return "Scorpio";
    }elseif(($tgl >= 22 && $tgl <= 31) && $bulan == 11){
      return "Sagittarius";
    }elseif(($tgl >= 1 && $tgl <= 21) && $bulan == 12){
      return "Sagittarius";
    }
}
}

$x = new Zodiac;
?>