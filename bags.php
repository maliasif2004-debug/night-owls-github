<!DOCTYPE html>
<html>

<head>
    <title>Anime Bags - Anime Store</title>

    <style>
/* NAVIGATION BAR */

.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 40px;
    background:rgba(0,0,0,.85);
    border-bottom:2px solid #00ffff;
}

.logo{
    color:#00ffff;
    font-size:24px;
    font-weight:bold;
}

.nav-links a{
    color:white;
    text-decoration:none;
    margin-left:20px;
    font-weight:bold;
    transition:.3s;
}

.nav-links a:hover{
    color:#00ffff;
}

/* FOOTER */

footer{
    margin-top:40px;
    background:rgba(0,0,0,.85);
    padding:20px;
    text-align:center;
}

.footer-links{
    margin-bottom:12px;
}

.footer-links a{
    color:#00ffff;
    text-decoration:none;
    margin:0 12px;
    font-weight:bold;
}

.footer-links a:hover{
    text-decoration:underline;
}
        body {
            margin: 0;
            font-family: Arial, sans-serif;

            background-image: url("new.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            color: white;
            transition: 0.4s;
        }

        .dark {
            background-image: url("new.jpg") !important;
        }

        h1 {
            text-align: center;
            padding: 20px;
            text-shadow: 2px 2px 6px black;
        }

        .topbar {
            position: fixed;
            top: 15px;
            right: 15px;
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .theme-btn {
            background: #00ffff;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;

            width: 90%;
            margin: auto;
        }

        .card {
            width: 220px;

            background: rgba(0, 0, 0, 0.7);
            padding: 15px;

            border-radius: 12px;
            text-align: center;

            box-shadow: 0 0 15px rgba(0,0,0,0.8);
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px #00ffff;
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
        }

        .nav {
            text-align: center;
            margin-top: 30px;
        }

        .nav a {
            color: #00ffff;
            text-decoration: none;
            margin: 0 10px;
        }

        .nav a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding-bottom: 20px;
            color: #ddd;
        }

    </style>

</head>

<body>
<div class="navbar">

    <div class="logo">
        🦉 Night Owls
    </div>

    <div class="nav-links">
        <a href="home.php">Home</a>

        <a href="cart.php">Cart</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="logout.php">Logout</a>
    </div>

</div>
    <h1>🎒 Anime Bags Collection</h1>




    </div>

    <div class="container">

        <a href="dbzbag.php" style="text-decoration:none; color:white;">
            <div class="card">
                <img src="dbzbag.jpg">
                <b>Dragon Ball Z Bags</b>
            </div>
        </a>

        <a href="narutobag.php" style="text-decoration:none; color:white;">
            <div class="card">
                <img src="narutobag.jpg">
                <b>Naruto Bags</b>
            </div>
        </a>

        <a href="jjkbag.php" style="text-decoration:none; color:white;">
            <div class="card">
                <img src="jjkbag.jpg">
                <b>Jujutsu Kaisen Bags</b>
            </div>
        </a>

        <a href="demonslayerbag.php" style="text-decoration:none; color:white;">
            <div class="card">
                <img src="demonslayerbag.jpg">
                <b>Demon Slayer Bags</b>
            </div>
        </a>

        <a href="otherbag.php" style="text-decoration:none; color:white;">
            <div class="card">
                <img src="otherbag.jpg">
                <b>Other Anime Bags</b>
            </div>
        </a>

    </div>


    <footer>
        <b>&copy; 2026 Night Owls Anime Store</b>
    </footer>


</body>

</html>