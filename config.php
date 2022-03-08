<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '58092952';
    $dbname = 'imageReference';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword);
    if(!$conn){
        die("Could not connect");
    }else{

    }
    mysqli_select_db($conn, $dbname);
?>