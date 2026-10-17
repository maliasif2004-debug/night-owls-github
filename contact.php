<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_messages (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql)) {
        header("Location: contact.php?success=1");
        exit();
    } else {
        die("Insert Failed: " . $conn->error);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact - Night Owls Anime Store</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url("new.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .contact-box {
            background: rgba(0, 0, 0, 0.75);
            padding: 35px;
            width: 320px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        }

        h1 {
            text-shadow: 2px 2px 5px black;
        }

        p {
            font-size: 14px;
        }

        input, textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
        }

        input:focus, textarea:focus {
            outline: none;
            box-shadow: 0 0 8px #00ffff;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background: #00ffff;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #00cccc;
        }

        .back-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #00ffff;
            color: black;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .back-btn:hover {
            background: #00cccc;
        }

        #counter {
            font-size: 12px;
            text-align: right;
            margin-top: 5px;
        }

        .success-message {
            background: #1d8f3a;
            color: white;
            padding: 10px;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="contact-box">

        <h1>📞 Contact Us</h1>

        <p>Have questions or suggestions? We’d love to hear from you!</p>

        <?php
        if (isset($_GET['success'])) {
            echo '<div class="success-message">✅ Message sent successfully!</div>';
        }
        ?>

        <form id="contactForm" method="POST" action="contact.php">

            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <textarea id="message" name="message" placeholder="Your Message" rows="5" maxlength="200" required></textarea>

            <div id="counter">0 / 200</div>

            <button type="submit" id="sendBtn">Send Message</button>

        </form>

        <a href="home.php" class="back-btn">⬅ Back to Home</a>

    </div>

    <script>
        const messageInput = document.getElementById("message");
        const counter = document.getElementById("counter");
        const sendBtn = document.getElementById("sendBtn");

        messageInput.addEventListener("input", function () {
            counter.textContent = `${messageInput.value.length} / 200`;
        });

        sendBtn.addEventListener("click", function () {
            sendBtn.style.transform = "scale(0.95)";

            setTimeout(function () {
                sendBtn.style.transform = "scale(1)";
            }, 150);
        });
    </script>

</body>
</html>