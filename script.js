// Form toggle functionality
document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById("login");
    const registerForm = document.getElementById("register");
    const buttonSlider = document.getElementById("btn");
    const formContainer = document.querySelector(".form-container");
    const modal = document.getElementById("forgotPasswordModal");
    const closeBtn = document.querySelector(".close");

    // Define the register function in the global scope
    window.register = function () {
        loginForm.style.left = "-400px";
        registerForm.style.left = "50px";
        buttonSlider.style.left = "110px";

        // Reset scroll position when switching to register form
        registerForm.scrollTop = 0;
    };

    // Define the login function in the global scope
    window.login = function () {
        loginForm.style.left = "50px";
        registerForm.style.left = "450px";
        buttonSlider.style.left = "0";
    };

    // Define the openForgotPasswordModal function in the global scope
    window.openForgotPasswordModal = function () {
        modal.style.display = "flex";
    };

    // Close button for modal
    if (closeBtn) {
        closeBtn.onclick = function () {
            modal.style.display = "none";
        };
    }

    // Close modal when clicking outside
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

    // Form validation
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            const passwordField = form.querySelector('input[name="password"]');
            const confirmPasswordField = form.querySelector('input[name="confirm_password"]');

            if (confirmPasswordField && passwordField) {
                if (passwordField.value !== confirmPasswordField.value) {
                    e.preventDefault();
                    alert("Passwords do not match!");
                    return false;
                }
            }
        });
    });
});