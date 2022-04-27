<?php
    $con = mysqli_connect("mysql.selfmade.ninja","vignesh_21","Vignesh?","vignesh_21_ecommerce");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>