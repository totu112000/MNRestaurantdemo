<?php

        require 'Connect_nhanvien.php';
        
        mysqli_set_charset($conn, 'UTF8');

   
        $id= $_GET['id'];

        $sql ="DELETE FROM `users` WHERE Uid = '$id'";

        if($conn->query($sql) === TRUE){

            require 'admin.php';

        }
        else{
            echo "ERROR";
        }


?>