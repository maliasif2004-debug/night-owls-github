<?php
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $token = md5(time() . $email);


        $conn->query("UPDATE users SET reset_token='$token' WHERE email='$email'");


        $resetLink = "http://localhost/web lab projects/reset.php?token=$token";

        $message = "Reset link generated: <br><a href='$resetLink'>$resetLink</a>";

    } else {
        $message = "❌ Email not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password - Night Owls</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url("new.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .box {
            width: 350px;
            background: rgba(0,0,0,0.8);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.7);
        }

        h2 {
            color: #00ffff;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            background: #00ffff;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #00cccc;
        }

        .msg {
            margin-top: 15px;
            font-size: 13px;
            color: lightgreen;
        }

        a {
            color: #00ffff;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="box">

    <h2>🔑 Forgot Password</h2>

    <p>Enter your email to receive reset link</p>

    <form method="POST">

        <input type="email" name="email" placeholder="Enter your email" required>

        <button type="submit">Send Reset Link</button>

    </form>

    <div class="msg">
        <?php echo $message; ?>
    </div>

    <p><a href="login.php">Back to Login</a></p>

</div>

</body>
</html>