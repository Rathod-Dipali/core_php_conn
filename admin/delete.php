<?php 
require_once "config.php";
$id= $_GET['id'];
$query= "delete from `admin` where id=$id ";
$result= mysqli_query($con,$query);
if ($result) {
echo "<script> alert ('Record successfully deleted');</script> " ;
echo "<script>window.location='index.php'</script>";
}
?>