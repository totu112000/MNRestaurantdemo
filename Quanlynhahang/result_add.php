<?php

   require 'Connect_nhanvien.php';
   
   $ho_ten= $_GET['ho_ten'];

   $sdt= $_GET['sdt'];

   $CCCD= $_GET['CCCD'];


   $id= $_GET['id']; 

   $sql = "INSERT INTO `nhan_vien`(`nhan_vien_id`, `ho_ten`, `sdt`, `CCCD`) VALUES ('$id','$ho_ten','$sdt','$CCCD')";


if($conn->query($sql) === TRUE){

    require 'DanhsachNV.php';

}
else{
    echo "ERROR";
}
?>