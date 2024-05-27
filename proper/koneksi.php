<?php
$host = "localhost";
$username = "root";
$password = "83348844*I(O)P";
$db = "kas";

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
  }
  
  // Sukses terhubung
echo "lu beruntung cuy";
?>