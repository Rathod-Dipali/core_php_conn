<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "core_php";

$base_url = "http://localhost/Core_php_conn/";
session_start();

$con = mysqli_connect($server_name,$user_name,$password,$database,'3377');
if($con){
    // echo "Connected Successfully.";
}
else{
    die("Error in connection!".mysqli_connect_error());
}
?>