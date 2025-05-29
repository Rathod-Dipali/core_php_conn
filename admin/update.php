<?php
require "config.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "UPDATE `add_admin` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE id='$id'";

if (mysqli_query($con, $query)) {
    echo "<script>alert('Updated')</script>";
    echo "<script>window.location='index.php'</script>";
} else {
    echo "<script>alert('Not Updated')</script>";
    echo "<script>window.location='index.php'</script>";
}
