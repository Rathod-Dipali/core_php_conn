<?php

    require "config.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];    

    $query = "UPDATE `admin` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE id='$id'";

    if ($_FILES['image']['name'] !== '' && isset($_FILES['image']['name'])) {

        $image_name = $_FILES['image']['name'];
        $path = "../assets/upload/" . $image_name;
        $tmp_file = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_file, $path);

        $query = "UPDATE `admin` SET `name`='$name',`email`='$email',`mobile`='$mobile', `image`='$image_name' WHERE id='$id'";

    }

    if (mysqli_query($con, $query)) {

        echo "<script>alert('Updated')</script>";
        echo "<script>window.location='view.php'</script>";
        return;

    }

    echo "<script>alert('Not Updated')</script>";
    echo "<script>window.location='view.php'</script>";

?>
