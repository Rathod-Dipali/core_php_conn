<?php

    session_start();
    $base_url = "http://localhost/Core_php_conn/";

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "core_php";

    $con = mysqli_connect($server_name,$user_name,$password,$database,'3377');
    if(!$con){

        die("Error in connection!".mysqli_connect_error());
        
    }

?>