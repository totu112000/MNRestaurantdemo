<?php

   require 'Connect_nhanvien.php';
   
   $ten_mon_an= $_GET['ten_mon_an'];

   $gia_tien= $_GET['gia_tien'];

   $mo_ta= $_GET['mo_ta']; 

   $sql = "INSERT INTO `mon_an`(`ten_mon_an`, `gia_tien`, `mo_ta`) VALUES ('$ten_mon_an','$gia_tien','$mo_ta')";


if($conn->query($sql) === TRUE){

    require 'DanhsachMonan.php';

}
else{
    echo "ERROR";
}
?>