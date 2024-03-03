<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($message);

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reg_db";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "INSERT INTO contact (name, email, msg) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>
