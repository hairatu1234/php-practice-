<?php
$host = 'localhost';
$dbname = 'myDatabase';
$username = 'your_username';
$password = 'your_password';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // Get the form inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
  
    // If a row is returned, the login is successful
    if ($stmt->rowCount() > 0) {
        // Redirect to the index.html page
        header("Location: index.html");
        exit();
    } else {
        echo "Invalid login credentials";
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

