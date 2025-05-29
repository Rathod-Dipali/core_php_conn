<?php
require "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "INSERT INTO `add_admin` (name, email, mobile) VALUES ('$name', '$email', '$mobile')";

if (mysqli_query($con, $query)) {
    echo "<script>alert('Registred')</script>";
    echo "<script>window.location='index.php'</script>";
} else {
    echo "<script>alert('Not Registred')</script>";
    echo "<script>window.location='index.php'</script>";
}
