<?php
include "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $check = "SELECT email FROM users WHERE email='$email'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {

        $error = "Email already exists.";

    } else {

        $sql = "INSERT INTO users (fullName, email, password)
                VALUES ('$fullName', '$email', '$password')";

        if ($conn->query($sql)) {
            header("Location: login.php");
            exit();
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Signup - Night Owls Anime Store</title>

    <style>
     
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url("new.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .signup-box {
            width: 340px;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow:
                0 0 15px rgba(0, 255, 255, 0.3),
                0 0 30px rgba(168, 85, 247, 0.2);
        }

        h1 {
            font-size: 24px;
            text-shadow: 0 0 10px #00f5ff;
            margin-bottom: 5px;
        }

        h2 {
            color: #cbd5e1;
            font-size: 18px;
            margin-bottom: 10px;
        }

        p {
            font-size: 13px;
            color: #ddd;
            margin-bottom: 15px;
        }

        .input-group {
            text-align: left;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 8px;
            outline: none;
            box-sizing: border-box;
        }

        input:focus {
            box-shadow: 0 0 10px #00f5ff;
        }

        .error-text {
            color: #ff4d4d;
            font-size: 11px;
            display: block;
            margin-top: 3px;
            height: 12px;
        }

        .terms {
            font-size: 12px;
            text-align: left;
            margin: 10px 0;
        }

        .terms input {
            width: auto;
            margin-right: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(45deg, #00f5ff, #a855f7);
            color: black;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.02);
            box-shadow: 0 0 15px #00f5ff;
        }

        .links {
            margin-top: 15px;
            font-size: 12px;
        }

        .links a {
            color: #00f5ff;
            text-decoration: none;
            margin: 0 5px;
        }

        .links a:hover {
            text-decoration: underline;
        }

        img {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<div class="signup-box">
    <h1>🦉 Night Owls</h1>
    <h2>Create New Account</h2>

    <img src="logo.jpg" width="80" alt="Logo">

    <p>Join the anime world and become a Night Owl</p>
<?php
if (!empty($error)) {
    echo '<div style="
        background: rgba(255,0,0,0.15);
        color:#ff4d4d;
        padding:10px;
        border-radius:8px;
        margin-bottom:15px;
        font-size:14px;
    ">
        '.$error.'
    </div>';
}
?>

    <form id="signupForm" method="POST" action="">

        <div class="input-group">
            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name">
            <small id="nameError" class="error-text"></small>
        </div>

     

        <div class="input-group">
            <input type="email" id="email" name="email" placeholder="Enter your email address">
            <small id="emailError" class="error-text"></small>
        </div>

        <div class="input-group">
            <input type="password" id="password" name="password" placeholder="Create a strong password (min 8 characters)">
            <small id="passwordError" class="error-text"></small>
        </div>

        <div class="input-group">
            <input type="password" id="confirmPassword" placeholder="Re-enter your password">
            <small id="confirmError" class="error-text"></small>
        </div>

        <div class="terms">
            <label>
                <input type="checkbox" id="termsBox">
                I agree to terms & conditions
            </label>
            <small id="termsError" class="error-text"></small>
        </div>

        <button type="submit">Create Account</button>
    </form>

    <div class="links">
        <a href="login.php">Back to Login</a>
        
    </div>
</div>

<script>
const signupForm = document.getElementById('signupForm');

signupForm.addEventListener('submit', (e) => {

    let isValid = true;

    const fullName = document.getElementById('fullName').value.trim();
    const username = document.getElementById('username').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const termsBox = document.getElementById('termsBox').checked;

    const nameError = document.getElementById('nameError');
    const userError = document.getElementById('userError');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    const confirmError = document.getElementById('confirmError');
    const termsError = document.getElementById('termsError');

    nameError.textContent = "";
    userError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";
    confirmError.textContent = "";
    termsError.textContent = "";

    if (fullName === "") {
        nameError.textContent = "Please enter your full name.";
        isValid = false;
    }

    if (username.length < 3) {
        userError.textContent = "Username must be at least 3 characters.";
        isValid = false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        emailError.textContent = "Please enter a valid email address.";
        isValid = false;
    }

    if (password.length < 8) {
        passwordError.textContent = "Password must be at least 8 characters.";
        isValid = false;
    }

    if (confirmPassword !== password) {
        confirmError.textContent = "Passwords do not match.";
        isValid = false;
    }

    if (!termsBox) {
        termsError.textContent = "You must agree to the terms.";
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault();
    }
});
</script>

</body>
</html>