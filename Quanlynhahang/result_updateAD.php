                     
<?php

require 'Connect_nhanvien.php';
mysqli_set_charset($conn, 'UTF8');

$Uid= $_GET['Uid'];

$firstname= $_GET['firstname'];

$lastname= $_GET['lastname'];

$email= $_GET['email'];

$password= $_GET['password'];

$sdt= $_GET['sdt'];



$sql ="UPDATE `users` SET firstname = '$firstname',lastname = '$lastname',firstname = '$firstname',email = '$email',password = '$password',sdt ='$sdt'  WHERE Uid = $Uid";

if($conn->query($sql) === TRUE){

    require 'admin.php';

}
else{
    echo "ERROR";
}


?>
                        