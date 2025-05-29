<?php
require "config.php";

if ($_POST['login_email'] && $_POST['login_password']) {
    session_start();
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];
    $qry = "select * from `add_admin` where email='$email'and password='$password' ";
    $res = mysqli_query($con, $qry);
    $row = mysqli_fetch_array($res);
    if ($row) {
        $name = $row['name'];
        $id = $row['id'];
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $name;
        echo "<script>alert('Admin login succsessfully')</script>";
        echo "<script>window.location='index.php'</script>";
    } else {
        echo "<script>alert('Invalid  Information')</script>";
        echo "<script>window.location='login.php'</script>";
    }
}
