<?php
include '../db/connection.php';

if (isset($_POST['username'])) {
    $username = trim($_POST['username']);
    
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "taken";
    } else {
        echo "available";
    }

    $stmt->close();
}
?>
