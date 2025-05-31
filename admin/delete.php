<?php 

    require_once "config.php";

    $query= "delete from `admin` where id='$_GET[id]' ";
    $result= mysqli_query($con,$query);
    
    if ($result) {

        echo "<script> alert ('Record successfully deleted');</script> " ;
        echo "<script>window.location='view.php'</script>";

    }

?>
