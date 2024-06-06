<?php
    $username = 'root';
    $database = 'kas';
    $password = '83348844*I(O)P';
    $host = 'localhost';

    $conn = mysqli_connect($host, $username, $password, $database);


    if(!$conn){
        die("lu kocak");
    }
    echo "lu beruntung cuy";
?>