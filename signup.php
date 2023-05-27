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
$name = $_POST["name"];
$email = $_POST["email"];
$passwd = $_POST["passwd"];
$sql = "INSERT INTO signup(name,email,passwd) values('$name','$email','$passwd');";
if($conn->query($sql) == TRUE){
    echo "NEW RECORD ADDED";
}
else{
    echo "ERROR: ".$conn->error;
}
$conn->close();
header("Location:http://localhost/MyShowz-Movie-ticket-booking-website-main/index.html");
?>