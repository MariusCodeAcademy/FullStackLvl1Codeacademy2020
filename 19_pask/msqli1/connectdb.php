<?php 

$serverName = 'localhost';
$userName = 'root';
$password = '';
$database = 'myfirstdb';


// Sukurti prisijungima 
$conn = new mysqli($serverName, $userName, $password, $database);

// Patirkinti ar pavyko prisijungti 

if($conn->connect_error){
    die('Connection failed: ' . $conn->connect_error);
}

echo "Connections succsesful(Prisijungta)";



// susijungimo su duomenu baze uzdarymas 
// $conn->close();

