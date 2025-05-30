<?php

    require "config.php";

    if (!isset($_SESSION['name'])) {
        echo "<script>window.location='login.php'</script>";
    }

    $query = "select * from `admin` where id='$_SESSION[id]'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    if (isset($info_array)) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?= isset($info_array['title']) ? $info_array['title'] : '' ?></title>

        <link rel="stylesheet" type="text/css" href="<?= $base_url ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?= $base_url ?>assets/custome_style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a href="<?php $base_url ?>home.php" class="navbar-brand light_color">Home</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link light_color active" aria-current="page" href="view.php">View Data</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                                <img class="user_image"
                                src="<?= $base_url ?>assets/upload/<?= $row['image'] ?>"
                                onerror="this.onerror=null; this.src='<?= $base_url ?>assets/upload/default.jpg';"
                                width="100"
                                height="100"
                                alt="User Image">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-danger" href="<?= $base_url ?>admin/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    <?php } ?>