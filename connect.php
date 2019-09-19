<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "user";

    $conn = mysqli_connect($servername,$username,$password,$db);

    mysqli_set_charset($conn,"utf8");

    // if(!$conn){
    //     die("No connect".mysqli_connect_error());
    // }else{
    //     echo "success";
    // }
?>