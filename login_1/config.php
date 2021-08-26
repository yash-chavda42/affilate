<?php
$server = "localhost";
$password = "";
$dbuser='root';
$database = "login_affi";
$conn = mysqli_connect($server,$dbuser,$password,$database);
if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
?>