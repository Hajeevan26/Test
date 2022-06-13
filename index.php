<?php
if (!isset($_SESSION)) {
    session_start();
}

date_default_timezone_set("Asia/Colombo");
include('connection/config.php');

if (isset($_POST["btnlogin"])) {
    $username = $_POST["uname"];
    $password = $_POST["password"];

    $sqlcheckuser = "SELECT * FROM tbl_user WHERE user_name='$username'";

    $sqllogin = "SELECT * FROM tbl_user WHERE user_name='$username'";
    $resultcheckuser = mysqli_query($con, $sqllogin) or die("sql error in sqllogin " . mysqli_error($con));
    $n = mysqli_num_rows($resultcheckuser);
    if ($n == 1) {
        $row = mysqli_fetch_assoc($resultcheckuser);
        $sqllogin = "SELECT * FROM tbl_user WHERE user_name='$username' and password='$password'";
        $resultlogin = mysqli_query($con, $sqllogin) or die("Error in login:" . mysqli_error($con));
        $m = mysqli_num_rows($resultlogin);
        if ($m == 1) {
            $row = mysqli_fetch_assoc($resultlogin);
            $status = $row['status'];
            if ($status == "active") {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['role_id'] = $row['role_id'];



                $sql2 = "UPDATE tbl_user SET attempt = 0 WHERE email='$username'";
                $result2 = mysqli_query($con, $sql2) or die("Error_in_checkuser:" . mysqli_error());
                $action = "Login";

                header('location:index1.php');
            } else if ($status == "deleted") {

                echo '<script> alert("your Acoount is deleted please contact Servive station");
				window.location.href="index1.php?pguest=errorpage.php&option=deleted";</script>';
            } else if ($status == "pending") {
                echo '<script> alert("your Acoount is pending please contact Servive station");
				window.location.href="index1.php?pguest=errorpage.php&option=pending";</script>';
            } else if ($status == "blocked") {
                echo '<script> alert("your Acoount is blocked please contact Servive station");
				window.location.href="index1.php?pguest=errorpage.php&option=blocked";</script>';
            }
        } else {
            $attempt = $row['attempt'];
            if ($attempt <= 3) {
                $msg = '<font color="red">Your Password Incorrect, Please try again</font>';

                $sql2 = "UPDATE tbl_user SET attempt = attempt+1 Where email='$username'";
                $result2 = mysqli_query($con, $sql2) or die("Error_in_checkuser:" . mysqli_error());
            } else {
                $msg = '<font color="red">Your attempt exceed 3 times</font>';
                header('location:forgetpassword.php');
            }
        }
    } else {
        $msg = '<font color="red">Your Username not registered in our database</font>';

        //echo '<script>alert("There is no such username");</script>';
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Login</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/datepicker3.css" rel="stylesheet">
    <link href="dist/css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <form role="form" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="uname" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <input type="submit" name="btnlogin" value="Login">
                           
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->


    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>