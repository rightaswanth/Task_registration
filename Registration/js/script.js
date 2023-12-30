
function validateForm() {
    var password = document.getElementById("pass").value;
    var confirmPassword = document.getElementById("confirm").value;
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("confirmPasswordError").innerHTML = "";

    
    if (password.length < 6) {
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters";
        return;
    }
    if (password !== confirmPassword) {
        document.getElementById("confirmPasswordError").innerHTML = "Passwords do not match";
        return;
    }
    document.getElementById("myForm").submit();
}