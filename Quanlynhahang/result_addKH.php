<?php

   require 'Connect_nhanvien.php';
   
   $ho_ten= $_GET['ho_ten_kh'];

   $sdt= $_GET['sdt'];

   $id= $_GET['khach_hang_id']; 

   $sql = "INSERT INTO `khach_hang`(`khach_hang_id`, `ho_ten_kh`, `sdt`) VALUES ('$id','$ho_ten','$sdt')";


if($conn->query($sql) === TRUE){

    require 'Danhsachkhachhang.php';

}
else{
    echo "ERROR";
}
?>