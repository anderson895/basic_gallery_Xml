document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('myForm');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission for now

        // Validate each input field
        validateName();
        validateEmail();
        validatePassword();

        // If all validations pass, submit the form
        if (validateName() && validateEmail() && validatePassword()) {
            alert('Form submitted successfully!');
            form.reset(); // Reset form after submission
        }
    });

    function validateName() {
        const nameValue = nameInput.value.trim();
        const nameError = document.getElementById('nameError');
        if (nameValue === '') {
            nameError.textContent = 'Name is required';
            return false;
        } else {
            nameError.textContent = '';
            return true;
        }
    }

    function validateEmail() {
        const emailValue = emailInput.value.trim();
        const emailError = document.getElementById('emailError');
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email validation pattern
        if (emailValue === '') {
            emailError.textContent = 'Email is required';
            return false;
        } else if (!emailPattern.test(emailValue)) {
            emailError.textContent = 'Invalid email format';
            return false;
        } else {
            emailError.textContent = '';
            return true;
        }
    }

    function validatePassword() {
        const passwordValue = passwordInput.value;
        const passwordError = document.getElementById('passwordError');
        if (passwordValue === '') {
            passwordError.textContent = 'Password is required';
            return false;
        } else if (passwordValue.length < 6) {
            passwordError.textContent = 'Password must be at least 6 characters';
            return false;
        } else {
            passwordError.textContent = '';
            return true;
        }
    }

    // Real-time validation on input change
    nameInput.addEventListener('input', validateName);
    emailInput.addEventListener('input', validateEmail);
    passwordInput.addEventListener('input', validatePassword);
});