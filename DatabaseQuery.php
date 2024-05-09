<?php

// Q1]  Write a PHP code to create: • Create a database College • Create a table Department (Dname, Dno, Number_Of_faculty)

// Database connection
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo"Connected <br>";
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS College";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select database
$conn->select_db("College");

// Create table Department
$sql = "CREATE TABLE IF NOT EXISTS Department (
    Dname VARCHAR(50),
    Dno INT PRIMARY KEY AUTO_INCREMENT,
    Number_Of_faculty INT
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Department created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>>

<?php
// Q2] Write a PHP program to create a database named “College”. Create a table named “Student” with following fields (sno, sname, percentage). Insert 3 records of your choice. Display the names of the students whose percentage is between 35 to 60 in a tabular format.

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbbase = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbbase);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo"Connected <br>";
}
// Create table Student
$sql = "CREATE TABLE IF NOT EXISTS Student (
    sno INT PRIMARY KEY AUTO_INCREMENT,
    sname VARCHAR(50),
    percentage FLOAT
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Student created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert records
$sql = "INSERT INTO Student (sname, percentage) VALUES 
    ('John Doe', 75.5),
    ('Jane Smith', 42.3),
    ('Alice Johnson', 55.9)";
if ($conn->query($sql) === TRUE) {
    echo "Records inserted successfully<br>";
} else {
    echo "Error inserting records: " . $conn->error;
}

// Display names of students with percentage between 35 and 60
$sql = "SELECT sname FROM Student WHERE percentage BETWEEN 35 AND 60";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Students with percentage between 35 and 60:</h2>";
    echo "<table border='1'><tr><th>Name</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["sname"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}

// Close connection
$conn->close();

?>>
