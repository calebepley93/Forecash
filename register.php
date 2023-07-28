<?php

session_start();

try {
    // Replace dbname, username, and password with your own details
    $db = new PDO('mysql:host=localhost;dbname=forecashusers', 'root', '');
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if (!$email) {
    die("Invalid email address.");
} 

$password = $_POST['password'];

if (strlen($password) < 8) {
    die("Password too short.");
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$stmt = $db->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
$stmt->execute([':email' => $email, ':password' => $hashedPassword]);

$_SESSION['success_msg'] = "Registration successful! You can now log in.";
header('Location: index.php');
exit();