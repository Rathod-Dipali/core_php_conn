<?php require "config.php";
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
                <a class="navbar-brand light_color">Navbar</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link light_color active" aria-current="page" href="index.php">Home</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <button class="btn btn-outline-light" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        
<?php } ?>