// Toggle password visibility
const passwordInput = document.getElementById("passwordInput");
const eyeSlash = document.getElementById("eyeSlash");
const eye = document.getElementById("eye");

// Jika ingin melihat password
eyeSlash.addEventListener("click", function () {
    passwordInput.setAttribute("type", "text");
    eyeSlash.style.display = "none";
    eye.style.display = "block";
});

// Jika tidak ingin melihat password
eye.addEventListener("click", function () {
    passwordInput.setAttribute("type", "password");
    eyeSlash.style.display = "block";
    eye.style.display = "none";
});

// Checkbox Ingat saya
function submitForm() {
    const form = document.getElementById("loginForm");
    const rememberMeCheckbox = document.getElementById("rememberMe");

    form.submit();
}
