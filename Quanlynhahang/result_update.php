                     
<?php

require 'Connect_nhanvien.php';
mysqli_set_charset($conn, 'UTF8');

$ho_ten= $_GET['ho_ten'];

$sdt= $_GET['sdt'];

$CCCD= $_GET['CCCD'];


$id= $_GET['id'];

$sql ="UPDATE `nhan_vien` SET ho_ten = '$ho_ten',sdt ='$sdt', CCCD ='$CCCD'  WHERE nhan_vien_id = $id";

if($conn->query($sql) === TRUE){

    require 'DanhsachNV.php';

}
else{
    echo "ERROR";
}


?>
                        