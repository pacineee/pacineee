<?php
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$Ename = $_POST['email'];
$description = $_POST['description'];

//Below is the Database connection
$conn = new mysqli('localhost','root','','personal');
if($conn->connect_error){
    die('Ooops...something goes wrong :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(fname, lname, email, description) value(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fname, $lname, $email, $description);
    $stmt->execute();
    echo "Message delivered...Thanks!";
    $stm->close();
    $conn->close();
}
?>
