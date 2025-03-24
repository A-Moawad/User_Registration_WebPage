<?php
session_start();
include '../db/connection.php'; 

$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $conn->prepare("SELECT name, username, phone_number, whatsapp_number, address, email, `password`, profile_picture, id FROM user WHERE email = ?");
$stmt->bind_param("s", $email); 
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'username' => $user['username'],
        'email' => $user['email'],
        'phone_number' => $user['phone_number'],
        'whatsapp_number' => $user['whatsapp_number'],
        'address' => $user['address'],
        'profile_picture' => $user['profile_picture']
    ];

    header("Location: ../views/userProfile.php");
    exit();
} else {
    echo "<script>alert('Invalid email or password!'); window.location.href='../views/login.php';</script>";
}
?>
