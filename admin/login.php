<?php require "config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>assets/custome_style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="mt-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title p-1 text-center text-bg-info text-light">Login</h5>
                    <form action="login_back.php" method="post">
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="email" class="form-control" name="login_email" id="login_email" required value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label>Password :</label>
                            <input type="password" class="form-control" name="login_password" required id="login_password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="" name="remeber_me" id="remeber_me" <?php if(isset($_COOKIE['password']) && isset($_COOKIE['email'])){ ?> checked <?php } ?>>
                            <label>Remember me :</label>
                        </div>
                        <button class="btn mt-3 d-flex justify-content-center btn-outline-info" name="login_admin">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
