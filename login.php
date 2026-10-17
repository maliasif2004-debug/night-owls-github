<?php
session_start();
include "db.php";

$message = "";

if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = "Please enter a valid email address.";

    } else {

        $stmt = $conn->prepare("SELECT id, fullName, email, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {

            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {


                $status = "Success";
                $history = $conn->prepare("INSERT INTO login_history (user_email, login_status) VALUES (?, ?)");
                $history->bind_param("ss", $email, $status);
                $history->execute();
                $history->close();

                session_regenerate_id(true);

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['fullName'] = $user['fullName'];
                $_SESSION['email'] = $user['email'];

                header("Location: home.php");
                exit();

            } else {


                $status = "Failed";
                $history = $conn->prepare("INSERT INTO login_history (user_email, login_status) VALUES (?, ?)");
                $history->bind_param("ss", $email, $status);
                $history->execute();
                $history->close();

                $message = "Incorrect email or password.";
            }

        } else {


            $status = "Failed";
            $history = $conn->prepare("INSERT INTO login_history (user_email, login_status) VALUES (?, ?)");
            $history->bind_param("ss", $email, $status);
            $history->execute();
            $history->close();

            $message = "Incorrect email or password.";
        }

        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Night Owls Anime Store - Login</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial,sans-serif;
            background:url("new.jpg") no-repeat center center fixed;
            background-size:cover;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box{
            width:360px;
            background:rgba(0,0,0,.75);
            padding:30px;
            border-radius:15px;
            color:white;
            text-align:center;
            box-shadow:0 0 20px rgba(0,0,0,.7);
        }

        img{
            width:100px;
            border-radius:50%;
            margin-bottom:15px;
        }

        h1{
            margin-bottom:5px;
        }

        h3{
            color:#00ffff;
            margin-bottom:15px;
        }

        p{
            font-size:14px;
            margin-bottom:15px;
        }

        input{
            width:100%;
            padding:12px;
            margin:8px 0;
            border:none;
            border-radius:8px;
            font-size:15px;
        }

        input:focus{
            outline:none;
            box-shadow:0 0 10px cyan;
        }

        button{
            width:100%;
            padding:12px;
            margin-top:15px;
            border:none;
            border-radius:8px;
            background:#00ffff;
            color:black;
            font-size:16px;
            cursor:pointer;
            transition:.3s;
        }

        button:hover{
            background:#00cccc;
        }

        .error{
            color:#ff6b6b;
            margin-top:15px;
            font-weight:bold;
            min-height:20px;
        }

        .links{
            margin-top:20px;
        }

        .links a{
            color:#00ffff;
            text-decoration:none;
        }

        .links a:hover{
            text-decoration:underline;
        }

        hr{
            margin:20px 0;
            border:1px solid #444;
        }

        footer{
            font-size:12px;
            color:#ccc;
        }
    </style>
</head>

<body>

<div class="login-box">

    <img src="logo.jpg" alt="Logo">

    <h1>Night Owls</h1>
    <h3>Login Portal</h3>

    <p>Welcome back! Login to continue your journey.</p>

    <form action="" method="POST" autocomplete="off">

        <input
            type="email"
            name="email"
            placeholder="Email Address"
            required
            autocomplete="off">

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
            autocomplete="new-password">

        <button type="submit">Login</button>

    </form>

    <div class="error">
        <?php echo htmlspecialchars($message); ?>
    </div>

    <div class="links">
        <a href="signup.php">Create Account</a> |
        <a href="forgot.php">Forgot Password?</a>
    </div>

    <hr>

    <footer>
        &copy; 2026 Night Owls Anime Store
    </footer>

</div>

</body>
</html>