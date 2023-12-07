<?php
include "inc/Connection.php";
$conn = new Connection();

$string = "SELECT COUNT(*) from user";
$trx = $conn->conn->prepare($string);
$trx->execute();
if ($trx->fetchColumn() == 0) {
    $pass = password_hash("stimik", PASSWORD_DEFAULT);
    $query = "INSERT INTO user(username, password, akses) values('Admin', '$pass', 'Admin')";
    $add = $conn->conn->prepare($query);
    $add->execute();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Bootstrap 5 Login Page Design</title>
</head>

<body>
    <section class="form-01-main">
        <div class="form-cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-sub-main">
                            <div class="_main_head_as">
                                <a href="#">
                                    <img src="assets/images/vector.png">
                                </a>
                            </div>
                            <form action="app/proses.php" method="post">
                                <div class="form-group">
                                    <input type="text" id="username" name="username" class="form-control _ge_de_ol" type="text" placeholder="Masukan Username" required="" aria-required="true">
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Masukan Password" required="required">
                                    <!-- <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i> -->
                                </div>



                                <div class="form-group">
                                    <div class="btn_uy">
                                        <button type="submit" name="login" class="btn btn-primary btn-sm">Login</button>
                                        <!-- <a type="submit" name="login"><span>Login</span></a> -->
                                        <button type="reset" name="reset" class="btn btn-danger btn-sm">Reset</button>
                                        <!-- <a type="reset" name="reset"><span>Reset</span></a> -->


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php

session_start();
if (isset($_SESSION["isLogin"])) {
    echo "<script>alert('gagal')</script>";
    header("Location: http://localhost/perpustakaan/index.php");
}
?>