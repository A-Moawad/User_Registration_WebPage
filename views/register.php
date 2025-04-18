<?php include 'header.php'; ?>

<link rel="stylesheet" href="styles.css">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>User Registration</h4>
                </div>
                <div class="card-body">
                    <form id="registrationForm" action="..\process\register_action.php" method="POST" enctype="multipart/form-data" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" id="full_name" class="form-control" required>
                            <div class="invalid-feedback">Full Name must be at least 3 letters and contain only alphabets.</div>
                        </div>
                        
                        <div class="mb-3">
                            <span id="check-username"></span>
                            <label class="form-label">Username</label>
                            <input type="text" name="username" id="user_name" class="form-control" required oninput="checkUsername()">
                            <div class="invalid-feedback">Username must be at least 4 characters long.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" name="phone_number" id="phone" class="form-control" required>
                            <div class="invalid-feedback">Enter a valid phone number (10-15 digits).</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">WhatsApp Number</label>
                            <input type="tel" name="whatsapp_number" id="whatsapp" class="form-control" required>
                            <div class="invalid-feedback">Enter a valid WhatsApp number (10-15 digits).</div>
                            <div class="d-flex mt-2 align-items-center justify-content-between">
                                <button class="btn btn-success" type="button" onclick="validateWhatsAppNumber()">Check Number</button>
                                <div class="whatsapp-validator"></div>
                                <div id="whatsapp-validator-spinner" class="spinner-border text-success" role="status" style="display:none"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                            <div class="invalid-feedback">Enter a valid email address.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                            <div class="invalid-feedback">Password must be at least 8 characters, including 1 number & 1 special character.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                            <div class="invalid-feedback">Passwords do not match.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload Profile Picture</label>
                            <input type="file" name="profile_picture" id="user_image" class="form-control" accept=".jpg, .jpeg, .png" required>
                            <div class="invalid-feedback">Only .jpg, .jpeg, .png files are allowed.</div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/regestration.js"></script>

<script src="../API_Ops.js"></script>

<?php include 'footer.php'; ?>
