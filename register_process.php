<?php
session_start(); // Start session to store user data

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $user_name = $_POST['user_name'];
    $phone = $_POST['phone'];
    $whatsapp = $_POST['whatsapp'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate Password Match
    if ($password !== $confirm_password) {
        die("Passwords do not match!");
    }

    // Hash Password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Handle Image Upload to public/images/
    if (!empty($_FILES["user_image"]["name"])) {
        $target_dir = "public/images/"; // Set upload path inside 'public'

        // Ensure the folder exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . basename($_FILES["user_image"]["name"]);
        move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file);

        // Get public URL for the image
        $image_url = "http://localhost/user-registrationPage/" . $target_file;
    } else {
        $image_url = "public/images/default.jpg"; // Default profile image
    }

    // Store User Data in SESSION to Show on Profile Page
    $_SESSION['user'] = [
        'full_name' => $full_name,
        'user_name' => $user_name,
        'phone' => $phone,
        'whatsapp' => $whatsapp,
        'address' => $address,
        'email' => $email,
        'profile_image' => $image_url
    ];

    // Redirect to Profile Page inside views/
    header("Location: views/userProfile.php");
    exit();
}
?>
