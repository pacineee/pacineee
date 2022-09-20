<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "mydb";
//connecting database and checking for errors
$conn= new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Ooops connection failed".$conn->connect_error);
}
?>