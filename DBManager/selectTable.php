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
    echo "<br>";
    $sql = "SELECT id, firstname,lastname FROM MyGuests";
    $result = $conn -> query($sql);
    if ($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            echo $row["id"]."-".$row["firstname"]. " ".$row["lastname"]."<br>";
        }
    }
    else{
        echo " 0 results ";}
    $conn -> close();
?>