<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>User Registration</h4>
                </div>
                <div class="card-body">
                    <form id="registrationForm" action="http://localhost/user-registrationPage/register_process.php" method="POST" enctype="multipart/form-data" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="full_name" id="full_name" class="form-control" required>
                            <div class="invalid-feedback">Full Name must be at least 3 letters and contain only alphabets.</div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="user_name" id="user_name" class="form-control" required>
                            <div class="invalid-feedback">Username must be at least 4 characters long.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-control" required>
                            <div class="invalid-feedback">Enter a valid phone number (10-15 digits).</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">WhatsApp Number</label>
                            <input type="tel" name="whatsapp" id="whatsapp" class="form-control" required>
                            <div class="invalid-feedback">Enter a valid WhatsApp number (10-15 digits).</div>
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
                            <input type="file" name="user_image" id="user_image" class="form-control" accept=".jpg, .jpeg, .png" required>
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("registrationForm");

    form.addEventListener("submit", function(event) {
        let isValid = true;

        // Full Name Validation
        const fullName = document.getElementById("full_name");
        if (!/^[a-zA-Z\s]{3,}$/.test(fullName.value)) {
            fullName.classList.add("is-invalid");
            isValid = false;
        } else {
            fullName.classList.remove("is-invalid");
        }

        // Username Validation
        const userName = document.getElementById("user_name");
        if (userName.value.length < 4) {
            userName.classList.add("is-invalid");
            isValid = false;
        } else {
            userName.classList.remove("is-invalid");
        }

        // Phone Number Validation
        const phone = document.getElementById("phone");
        if (!/^\d{10,15}$/.test(phone.value)) {
            phone.classList.add("is-invalid");
            isValid = false;
        } else {
            phone.classList.remove("is-invalid");
        }

        // WhatsApp Number Validation
        const whatsapp = document.getElementById("whatsapp");
        if (!/^\d{10,15}$/.test(whatsapp.value)) {
            whatsapp.classList.add("is-invalid");
            isValid = false;
        } else {
            whatsapp.classList.remove("is-invalid");
        }

        // Email Validation
        const email = document.getElementById("email");
        if (!/^\S+@\S+\.\S+$/.test(email.value)) {
            email.classList.add("is-invalid");
            isValid = false;
        } else {
            email.classList.remove("is-invalid");
        }

        // Password Validation
        const password = document.getElementById("password");
        if (!/^(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,}$/.test(password.value)) {
            password.classList.add("is-invalid");
            isValid = false;
        } else {
            password.classList.remove("is-invalid");
        }

        // Confirm Password Validation
        const confirmPassword = document.getElementById("confirm_password");
        if (confirmPassword.value !== password.value) {
            confirmPassword.classList.add("is-invalid");
            isValid = false;
        } else {
            confirmPassword.classList.remove("is-invalid");
        }

        // Image Validation
        const userImage = document.getElementById("user_image");
        const allowedExtensions = ["jpg", "jpeg", "png"];
        const fileExtension = userImage.value.split(".").pop().toLowerCase();
        if (!allowedExtensions.includes(fileExtension)) {
            userImage.classList.add("is-invalid");
            isValid = false;
        } else {
            userImage.classList.remove("is-invalid");
        }

        if (!isValid) {
            event.preventDefault(); // Stop form submission
        }
    });
});
</script>

<?php include 'footer.php'; ?>
