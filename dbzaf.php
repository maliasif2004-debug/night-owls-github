<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Dragon Ball Z Action Figures - Anime Store</title>

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

        button {
            margin-top: 10px;
            padding: 8px 12px;

            background: #00ffff;
            border: none;
            border-radius: 6px;

            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #00cccc;
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
    <h1>🔥 Dragon Ball Z Action Figures Collection</h1>

    <div class="container">

<div class="card">
    <img src="dbzaf1.jpg">
    <p><b>Goku Super Saiyan Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Goku Super Saiyan Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbzaf2.jpg">
    <p><b>Vegeta Super Saiyan Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Vegeta Super Saiyan Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbzaf3.jpg">
    <p><b>Gohan Super Saiyan 2 Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Gohan Super Saiyan 2 Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbzaf4.jpg">
    <p><b>Piccolo Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Piccolo Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbzaf5.jpg">
    <p><b>Future Trunks Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Future Trunks Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbzaf6.jpg">
    <p><b>Frieza Final Form Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Frieza Final Form Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbzaf7.jpg">
    <p><b>Majin Buu Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Majin Buu Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbzaf8.jpg">
    <p><b>Cell Perfect Form Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Cell Perfect Form Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbzaf9.jpg">
    <p><b>Broly Legendary Super Saiyan Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Broly Legendary Super Saiyan Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz10af.jpg">
    <p><b>Krillin Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Krillin Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz11af.jpg">
    <p><b>Master Roshi Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Master Roshi Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz12af.jpg">
    <p><b>Android 18 Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Android 18 Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz13af.jpg">
    <p><b>Android 17 Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Android 17 Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz14af.jpg">
    <p><b>Beerus Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Beerus Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz15af.jpg">
    <p><b>Whis Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Whis Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz16af.jpg">
    <p><b>Goku Ultra Instinct Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Goku Ultra Instinct Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz17af.jpg">
    <p><b>Vegeta Ultra Ego Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Vegeta Ultra Ego Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz18af.jpg">
    <p><b>Gogeta Super Saiyan Blue Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Gogeta Super Saiyan Blue Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz19af.jpg">
    <p><b>Vegito Super Saiyan Blue Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Vegito Super Saiyan Blue Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="card">
    <img src="dbz20af.jpg">
    <p><b>Shenron Dragon Figure</b></p>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_name" value="Shenron Dragon Figure">
        <button type="submit">Add to Cart</button>
    </form>
</div>

    </div>


    <footer>
        <b>&copy; 2026 Night Owls Anime Store</b>
    </footer>


</body>
</html>