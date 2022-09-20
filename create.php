<?php
include "config.php";
if(isset($_POST['submit'])){
    $fname= $POST['fname'];
    $lname= $POST['lname'];
    $lname= $POST['email'];
    $lname= $POST['description'];

}

$sql = "INSERT INTO'user' ('fname', 'lname', 'email','password', 'gender') VALUES ('$fname', '$lname', '$email', '$description')";
$result= $conn->query($sql);
if($result== TRUE){
    echo "INFO Sent Successfuly";
} 
else{
    echo "OOOPs...connection failed" .$sql ."<br>" .$conn->error;
}

$conn->close();
?>