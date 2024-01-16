<?php

        require 'Connect_nhanvien.php';
        
        mysqli_set_charset($conn, 'UTF8');

   
        $id= $_GET['id'];

        $sql ="DELETE FROM `hoa_don` WHERE hoa_don_id = $id";

        if($conn->query($sql) === TRUE){

            require 'hoadon.php';

        }
        else{
            echo "ERROR";
        }


?>