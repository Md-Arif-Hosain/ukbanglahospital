<?php

$servername ="localhost";
$username="root";
$password="";
$db="ukbanglahospital";

//Create Connection
$conn= new mysqli($servername, $username, $password, $db);

//Check Connection
if($conn->connect_error){
    die ("Connection Failed: " . $conn->connect_error);
}

// Create database
// $sql = "CREATE DATABASE ukbanglahospital";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

//Create Table 

// Sql to create TABLE
// $sql = "CREATE TABLE patientserial (
// id INT(10) AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL,
// phone int(11) NOT NULL,
// email VARCHAR(50),
// date VARCHAR (50) NOT NULL,
// subject VARCHAR(255)
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// // Insert Data into Table
// $sql="INSERT INTO patientserial (name, phone, email, date, subject) VALUES
//  ('Md. Arif Hosain','01727083707', 'arifhosain20284@gmail.com', '07/17/2023', 'This is arif')";

// if($conn->query($sql) === TRUE){
//     echo "Insert data successfully";
// }
// else{
//     echo "error:" . $conn->error;
// }

?>