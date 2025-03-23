<?php
// Simulating user data (Replace with database retrieval later)
$user = [
    'full_name' => 'John Doe',
    'user_name' => 'johndoe123',
    'phone' => '01012345678',
    'whatsapp' => '01098765432',
    'address' => 'Cairo, Egypt',
    'email' => 'johndoe@example.com',
    'profile_image' => 'public/images/user1.jpg' 
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #007bff;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="profile-container">
        <img src="<?php echo $user['profile_image']; ?>" class="profile-image" alt="User Image">
        <h2 class="mt-3"><?php echo $user['full_name']; ?></h2>
        <p>@<?php echo $user['user_name']; ?></p>

        <hr>

        <p><strong>📞 Phone:</strong> <?php echo $user['phone']; ?></p>
        <p><strong>📱 WhatsApp:</strong> <?php echo $user['whatsapp']; ?></p>
        <p><strong>📍 Address:</strong> <?php echo $user['address']; ?></p>
        <p><strong>📧 Email:</strong> <?php echo $user['email']; ?></p>

        <a href="home.php" class="btn btn-primary mt-3">Back to Home</a>
    </div>
</div>

</body>
</html>
