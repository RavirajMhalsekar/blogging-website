<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "blogging_website";
    //  create a connection
    $conn = mysqli_connect($servername,$username,$password,$database);
    // die of connection was not successful
    if(!$conn){
    die("sorry we failed to connect: ". mysqli_connect_error());
    }
?>