<?php
session_start();

// Check if user data exists in the session
if (!isset($_SESSION['user'])) {
    die("No user data found! Please register first.");
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #007bff;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <h2>Welcome, <?php echo htmlspecialchars($user['full_name']); ?>!</h2>
    <img src="<?php echo htmlspecialchars($user['profile_image']); ?>" class="profile-img" alt="Profile Image">
    <p><strong>Username:</strong> <?php echo htmlspecialchars($user['user_name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($user['phone']); ?></p>
    <p><strong>WhatsApp:</strong> <?php echo htmlspecialchars($user['whatsapp']); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($user['address']); ?></p>
    <a href="../index.php" class="btn btn-primary">Go to Home</a>
</div>

</body>
</html>
