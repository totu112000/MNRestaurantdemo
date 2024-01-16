                     
<?php

require 'Connect_nhanvien.php';
mysqli_set_charset($conn, 'UTF8');

$ho_ten= $_GET['ho_ten_kh'];

$sdt= $_GET['sdt'];

$id= $_GET['khach_hang_id'];

$sql ="UPDATE `khach_hang` SET ho_ten_kh = '$ho_ten',sdt ='$sdt'  WHERE khach_hang_id = $id";

if($conn->query($sql) === TRUE){

    require 'Danhsachkhachhang.php';

}
else{
    echo "ERROR";
}


?>
                        