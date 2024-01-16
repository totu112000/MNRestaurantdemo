<?php

        require 'Connect_nhanvien.php';
        
        mysqli_set_charset($conn, 'UTF8');

   
        $id= $_GET['id'];

        $sql ="DELETE FROM `khach_hang` WHERE khach_hang_id = $id";

        if($conn->query($sql) === TRUE){

            require 'Danhsachkhachhang.php';

        }
        else{
            echo "ERROR";
        }


?>