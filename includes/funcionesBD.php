<?php


function createBD(){
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    $sql = "CREATE DATABASE notabase";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    }
}


function openConnectionDB($dbname) {   
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $db = $dbname;
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        return -1;
    }else {
        return $conn;
    }
    
}

function closeConnection($conn){
    $conn->close();
}


function createTableSongs(){
      
    $conn = openConnectionDB("notabase");
    
    $sql = "CREATE TABLE songs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    genre VARCHAR(255),
    artist VARCHAR(255),
    album VARCHAR(255),
    release_date DATE,
    lyrics TEXT)";
    
    $conn->query($sql);
    
    closeConnection($conn);
    
}

function insertValuesIntoTableSongs(){
    
    
}
// Consulta SQL para crear la tabla "canciones"



