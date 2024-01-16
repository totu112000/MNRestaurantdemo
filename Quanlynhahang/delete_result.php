<?php

        require 'Connect_nhanvien.php';
        
        mysqli_set_charset($conn, 'UTF8');

   
        $id= $_GET['id'];

        $sql ="DELETE FROM `nhan_vien` WHERE nhan_vien_id = $id";

        if($conn->query($sql) === TRUE){

            require 'DanhsachNV.php';

        }
        else{
            echo "ERROR";
        }


?>