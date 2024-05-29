<?php
    $servername = "localhost";
    $username ="root";
    $password = "";
    $conn = new mysqli($servername,$username,$password);
    if($conn -> connect_errno){
        die("Connection failed: ". $conn -> connect_error);
    }
    echo "Connected successfully ";
?>