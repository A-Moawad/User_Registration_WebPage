<?php
include '../db/connection.php'; 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? '';
    $username = $_POST["username"] ?? '';
    $address = $_POST["address"] ?? '';
    $phone_number = $_POST["phone_number"] ?? '';
    $whatsapp_number = $_POST["whatsapp_number"] ?? '';
    $email = $_POST["email"] ?? '';
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 

    $profile_picture = $_POST["profile_picture"] ?? "default.png"; 

    if (!empty($_FILES["profile_picture"]["name"])) {
        $target_dir = "../uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true); 
        }

        $file_name = time() . "_" . basename($_FILES["profile_picture"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                $profile_picture = $file_name; 
            }
        }
    }

    $sql = "INSERT INTO user (name, username, phone_number, whatsapp_number,address, email, password, profile_picture) 
            VALUES ('$name','$username', '$phone_number', '$whatsapp_number', '$address','$email', '$password', '$profile_picture')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Registration successful!');
                window.location.href = '../views/home.php'; // change this path if needed
            </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
