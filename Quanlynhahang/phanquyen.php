<?php

if(isset($_SESSION['email']) == false) {

    echo"Bạn chưa đăng nhập <br> <a href='login.php'>Đăng nhập tại đây</a>";
    exit;
}
else{
    if(isset($_SESSION['email']) ==  true){

        $permission = $_SESSION['email'];

        if($permission == 0){
            echo"Bạn không đủ quyền truy cập <a href='index.php'>Trang chu</a> ";
            exit;
        }
    }
}

?>