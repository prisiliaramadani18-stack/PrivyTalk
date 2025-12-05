<?php
$host ="localhost";
$user ="root";
$psw  ="";
$db   ="privy-talk";

$connect=mysqli_connect($host,$user,$psw,$db);
if ($connect){
    echo "Berhasil Terkoneksi ke database";
    mysqli_close($connect);
}else{
    die ("gagal terkoneksi:".mysqli_connect_eror());
}
?>