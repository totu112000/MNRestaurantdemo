<?php
   $severname = "localhost";
   $usename = "root";
   $password = "";
   $db ="nha_hang";
   //creat connection
   $conn = new mysqli($severname, $usename, $password, $db);
   //check connection
   if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
   //echo "Connected successfully <br>";
?>