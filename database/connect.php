<?php 
session_start();
$host = "localhost";
$user = "tao";
$password = "password";
$database = "anointedone";

//Connect to MySQL
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
?>
        <script>
        die("Connection failed: " . $conn->connect_error);
        alert('Error while connecting to database, sorry for inconvenience. Thank You!');
    </script>
<?php
    }
?>