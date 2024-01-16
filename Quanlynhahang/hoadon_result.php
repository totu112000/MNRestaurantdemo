<?php

   require 'Connect_nhanvien.php';
   
   $idKH= $_GET['idKH'];

   $idMA= $_GET['idMA'];

   $idNV= $_GET['idNV']; 

   $soluong= $_GET['soluong']; 


   $sql = "INSERT INTO `hoa_don`(`ten_mon_an`, `khach_hang_id`, `nhan_vien_id`, `so_luong`) VALUES ('$idMA','$idKH','$idNV','$soluong')";


if($conn->query($sql) === TRUE){

    require 'hoadon.php';

}
else{
    echo "ERROR";
}
?>