<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE Student
(
ID int NOT NULL AUTO_INCREMENT,
FirstName varchar(50),
LastName varchar(50),
RollNo varchar(50),
City varchar(50),
PRIMARY KEY (ID)
)"; 

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
}
 else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>