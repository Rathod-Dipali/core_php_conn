<?php

    require "config.php";

    if ($_POST['login_email'] && $_POST['login_password']) {
        
        $email = $_POST['login_email'];
        $password = $_POST['login_password'];

        if (isset($_POST['remeber_me']) && $_POST['remeber_me'] === 'on') {

            setcookie('email', $_POST['login_email'], time() + (86400 * 30), "/");
            setcookie('password', $_POST['login_password'], time() + (86400 * 30), "/");

        }
        else{

            setcookie('email', '', -1, '/');
            setcookie('password', '', -1, '/');

        }

        $qry = "select * from `admin` where email='$email'and password='$password' ";
        $res = mysqli_query($con, $qry);
        $row = mysqli_fetch_array($res);

        if ($row) {

            $name = $row['name'];
            $id = $row['id'];

            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;

            echo "<script>alert('Admin login succsessfully')</script>";
            echo "<script>window.location='view.php'</script>";

            return;

        }

        echo "<script>alert('Invalid  Information')</script>";
        echo "<script>window.location='login.php'</script>";
        
    }

?>
