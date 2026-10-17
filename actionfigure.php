<!DOCTYPE html>
<html>

<head>
    <title>Action Figures - Anime Store</title>

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
        }

        h1 {
            text-align: center;
            padding: 20px;
            text-shadow: 2px 2px 6px black;
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
    <h1>⚔️ Anime Action Figures Collection</h1>

 <div class="container">

    <a href="dbzaf.php" style="text-decoration: none; color: white;">
        <div class="card">
            <img src="gkaf.jpg">
            <b>Dragon Ball Z Action Figure</b>
        </div>
    </a>

    <a href="narutoaf.php" style="text-decoration: none; color: white;">
        <div class="card">
            <img src="nrutoaf.jpg">
            <b>Naruto Action Figures</b>
        </div>
    </a>

    <a href="jjkaf.php" style="text-decoration: none; color: white;">
        <div class="card">
            <img src="jjkaf.jpg">
            <b>Jujutsu Kaisen Action Figure</b>
        </div>
    </a>

    <a href="demonslayeraf.php" style="text-decoration: none; color: white;">
        <div class="card">
            <img src="demonslayersf.jpg">
            <b>Demon Slayer Action Figure</b>
        </div>
    </a>

    <a href="otheraf.php" style="text-decoration: none; color: white;">
        <div class="card">
            <img src="actionaaaaaaaaaaaaaaa.jpg">
            <b>Other Action Figures</b>
        </div>
    </a>

</div>

    



    <footer>
        <b>&copy; 2026 Night Owls Anime Store</b>
    </footer>

</body>

</html>