function checkUsername() {
	$.ajax({
		url: "../process/check_username.php",
		type: "POST",
		data: { username: $("#user_name").val() },
		success: function (response) {
			if (response.trim() === "available") {
				$("#check-username").html(
					"<span class='text-success'>Username is available</span>"
				);
				$("#user_name").removeClass("is-invalid").addClass("is-valid");
			} else if (response.trim() === "taken") {
				$("#check-username").html(
					"<span class='text-danger'>Username is already taken</span>"
				);
				$("#user_name").removeClass("is-valid").addClass("is-invalid");
			} else {
				$("#check-username").html(
					"<span class='text-warning'>Unexpected response</span>"
				);
			}
		},
		error: function () {
			$("#check-username").html(
				"<span class='text-danger'>Error checking username</span>"
			);
		},
	});
}
document.addEventListener("DOMContentLoaded", function () {
	const form = document.getElementById("registrationForm");
	// Form validation on submit
	form.addEventListener("submit", function (event) {
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
		const confirmPassword = document.getElementById("confirm_password");
		const passRegex = /^(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,}$/;

		if (!passRegex.test(password.value)) {
			password.classList.add("is-invalid");
			alert(
				"Password must be at least 8 characters, include one number and one special character."
			);
			isValid = false;
		} else {
			password.classList.remove("is-invalid");
		}

		// Confirm Password Match
		if (confirmPassword.value !== password.value) {
			confirmPassword.classList.add("is-invalid");
			alert("Passwords do not match.");
			isValid = false;
		} else {
			confirmPassword.classList.remove("is-invalid");
		}

		// Image Validation
		const userImage = document.getElementById("user_image");
		const allowedExtensions = ["jpg", "jpeg", "png"];
		if (userImage.value) {
			const fileExtension = userImage.value
				.split(".")
				.pop()
				.toLowerCase();
			if (!allowedExtensions.includes(fileExtension)) {
				userImage.classList.add("is-invalid");
				isValid = false;
			} else {
				userImage.classList.remove("is-invalid");
			}
		}

		if (!isValid) {
			event.preventDefault();
		}
	});
});
