<?php

        require 'Connect_nhanvien.php';
        
        mysqli_set_charset($conn, 'UTF8');

   
        $id= $_GET['id'];

        $sql ="DELETE FROM mon_an WHERE `ten_mon_an` = $id";

        if($conn->query($sql) === TRUE){

            require 'DanhsachMonan.php';

        }
        else{
            echo "ERROR";
        }


?>