<?php
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "myDB";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn -> connect_errno){
        die("Connection failed: ". $conn -> connect_error);
    }
    echo "Connected successfully ";
    $sql = "INSERT INTO MyGuests (firstname,lastname,email)
    VALUES('Kang','Kang','kang@gmail.com')";
    if($conn -> query($sql) === TRUE){
        echo"New record created successfully";
    }else {
        echo "Error: ".$sql."<br> ".$conn -> error;
    }
    $conn -> close();
?>