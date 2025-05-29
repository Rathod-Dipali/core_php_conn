<?php
require_once "config.php";
if (session_destroy()) {
    echo "<script>alert('Admin Successfully Logout')</script>";
    echo "<script>window.location='login.php'</script>";
}
