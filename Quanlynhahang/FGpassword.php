<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Password Reset - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                                        <form name="reset" action="FGpassword.php" method="post" >
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="inputEmail" id="inputEmail" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="login.php">Return to login</a>
                                                <input type="submit" value="Reset mật khẩu" name="reset">
                                            </div>
                                            <?php

header('Content-Type: text/html; charset=UTF-8');

if(isset($_POST['reset'])){

    require 'Connect_nhanvien.php';

    $inputEmail= $_POST['inputEmail'];
    $resetpassword = 1;

    $sql="SELECT email,password FROM users WHERE email = '$inputEmail' ";
    $result = $conn->query($sql);
    if ($result->num_rows == 0){

        echo"<p style='color: red;'>Email không đúng!</p>";
        exit;
        
    }

    else{
        
        $sql="UPDATE `users` SET `password`='1' WHERE `email`= '$inputEmail'";

        echo"<p style='color: blue;'>Mật khẩu đã được reset</p>";
        exit;
    }
    session_start();
    
    $_SESSION['email'] = $inputEmail;
    $_SESSION['password'] = $inputPassword;

    header('location:login.php');
    
}
?>

                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
