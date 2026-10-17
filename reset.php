<?php
include "db.php";

$token = $_GET['token'] ?? '';
$message = "";


$sql = "SELECT * FROM users WHERE reset_token='$token'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("❌ Invalid or expired reset link.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword !== $confirmPassword) {

        $message = "❌ Passwords do not match!";

    } elseif (strlen($newPassword) < 8) {

        $message = "❌ Password must be at least 8 characters!";

    } else {


        $user = $result->fetch_assoc();


        if (password_verify($newPassword, $user['password'])) {

            $message = "❌ New password cannot be the same as your current password.";

        } else {

            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);


            $update = "UPDATE users
                       SET password='$hashedPassword', reset_token=''
                       WHERE reset_token='$token'";

            if ($conn->query($update)) {

                $message = "✅ Password reset successful! You can now login.";

            } else {

                $message = "❌ Error updating password!";

            }

        }

    }
}?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password - Night Owls</title>

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
            background: rgba(0,0,0,0.85);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.8);
        }

        h2 {
            color: #00ffff;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
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

    <h2>🔐 Reset Password</h2>

    <form method="POST">

        <input type="password" name="password" placeholder="New Password" required>

        <input type="password" name="confirm_password" placeholder="Confirm Password" required>

        <button type="submit">Update Password</button>

    </form>

    <div class="msg">
        <?php echo $message; ?>
    </div>

    <p><a href="login.php">Back to Login</a></p>

</div>

</body>
</html>