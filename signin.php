<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'moviebuzz';
$conn = new mysqli($server,$user,$pass,$db);
if ($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
}
/*$sql = "CREATE TABLE logindetails(email varchar(30) NOT NULL,passwd varchar(30) NOT NULL)";
if ($conn->query($sql) == TRUE) {
    echo "Table LoginDetails Created";
}
else {
    echo "Error Creating Tabel: " .$conn->error;
}*/
$email = $_POST["email"];
$passwd = $_POST["passwd"];
$sql = "INSERT INTO signin(email,passwd) values('$email','$passwd')";
if($conn->query($sql) == TRUE){
    echo "NEW RECORD ADDED";
}
else{
    echo "ERROR: ".$conn->error;
}
$conn->close();
?>