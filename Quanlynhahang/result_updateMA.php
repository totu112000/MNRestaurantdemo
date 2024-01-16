                     
<?php

require 'Connect_nhanvien.php';

mysqli_set_charset($conn, 'UTF8');

$ten_mon_an= $_GET['ten_mon_an'];

$gia_tien= $_GET['gia_tien'];

$mo_ta= $_GET['mo_ta'];

$sql ="UPDATE `mon_an` SET gia_tien = '$gia_tien',mo_ta ='$mo_ta'  WHERE ten_mon_an = '$ten_mon_an'";

if($conn->query($sql) === TRUE){

    require 'DanhsachMonan.php';

}
else{
    echo "ERROR";
}


?>
                        