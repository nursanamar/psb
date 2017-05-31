<?php
function generatePassword($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }
    return $result;
}
function hitung($link,$query){
    $f=mysqli_query($link,"$query");
    $data=mysqli_num_rows($f);
    $count=$data;
    return $count;
    }
function hitungjrsn($sambung,$jrsn)
{
    $query="SELECT * FROM pilihan_jurusan WHERE pertama='$jrsn'";
    $f=mysqli_query($sambung,$query) or die(mysqli_error($sambung));
    $data=mysqli_num_rows($f);
    $count=$data;
    return $count;
}
function ceknisn($sambung,$nisn){
  $query="SELECT nisn FROM csba WHERE csba.nisn='$nisn'";
  $send= mysqli_query($sambung,$query);
  $hasil= mysqli_fetch_array($send);
  if ($hasil) {
    return true;
  }
  return false;
}
?>
