<?php
require "config.php";   

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE name='$name' OR email='$email'");

    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Username or Email already exists');</script>";
    } else {
        if ($password == $confirmpassword) {
            $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
            
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Registration Success');</script>";
            } else {
                echo "<script>alert('Error during registration');</script>";
            }
        } else {
            echo "<script>alert('Password Does Not Match');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css">

    <script defer src="js\script.js"></script>
</head>
<body>

<div class="container">
        <div class="row">
            <div class="major-part">
            <h1>Community Registration</h1>
            <form  id="myForm" action="/UserDisplay.php" method="post">
            <div class="input-box mt-5">
                <label for="username" class="required-label">Name</label>
                <div>                            
                    <input type="text" id="name" name="name" placeholder="Enter your Full Name" required>
                </div>
            </div>
            <div class="input-box mt-5">
                <label for="email" class="required-label">Email</label>
                <div>                            
                    <input type="text" id="mail" name="email" placeholder="Enter your Email Id" required>
                </div>
            </div>
            <div class="input-box mt-5">
                <label for="password" class="required-label">Password</label>
                <div>                            
                    <input type="text" id="pass" name="password" placeholder="Enter your Password" required>
                    <div class="error-message" id="passwordError"></div>
                </div>
            </div>
            <div class="input-box mt-5">
                <label for="confirmpassword" class="required-label">Confirm Password</label>
                <div>                            
                    <input type="text" id="confirm" name="confirmpassword" placeholder="Confirm your Password" required>
                    <div class="error-message" id="confirmPasswordError"></div>
                </div>
            </div>
            <div class="mt-4">
            <button  type="button" onclick="validateForm()" name="submit">Submit</button>
        </div>

            </form>


            </div>

        </div>
      </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
