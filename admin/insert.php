<?php
require "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$image_name = $_FILES['image']['name'];

$path = "../assets/upload/".$image_name;
$tmp_file = $_FILES['image']['tmp_name'];
move_uploaded_file($tmp_file,$path);

$query = "INSERT INTO `admin` (name, email, mobile,password,image) VALUES ('$name', '$email', '$mobile','$password','$image_name')";

if (mysqli_query($con, $query)) {
    echo "<script>alert('Registred')</script>";
    echo "<script>window.location='index.php'</script>";
} else {
    echo "<script>alert('Not Registred')</script>";
    echo "<script>window.location='index.php'</script>";
}
