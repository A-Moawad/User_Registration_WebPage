<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero {
            text-align: center;
            padding: 80px 20px;
            background: linear-gradient(to right, #007bff, #0056b3);
            color: white;
        }
        .hero h1 {
            font-size: 2.5rem;
        }
        .features {
            text-align: center;
            padding: 50px 20px;
        }
        .feature-icon {
            font-size: 3rem;
            color: #007bff;
        }
    </style>
</head>
<body>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">User Registration</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="views/userProfile.php">Profile</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Flex container to push footer down -->
  <div class="d-flex flex-column justify-content-between min-vh-100">
    
    <!-- Hero Section -->
    <div class="hero">
      <h1>Welcome to User Registration</h1>
      <p>Register now and create your profile with ease.</p>
      <a href="register.php" class="btn btn-light btn-lg">Get Started</a>
    </div>
    
    <!-- Features Section -->
    <div class="container features ">
      <div class="row">
        <div class="col-md-4">
          <i class="feature-icon bi bi-person-plus"></i>
          <h4>Easy Registration</h4>
          <p>Quick and simple sign-up process for all users.</p>
        </div>
        <div class="col-md-4">
          <i class="feature-icon bi bi-lock"></i>
          <h4>Secure Data</h4>
          <p>We use encryption to protect your data.</p>
        </div>
        <div class="col-md-4">
          <i class="feature-icon bi bi-image"></i>
          <h4>Upload Profile Pictures</h4>
          <p>Customize your profile with a unique image.</p>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-center bg-dark text-white py-3">
      &copy; <?php echo date("Y"); ?> User Registration System. All rights reserved.
    </footer>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
