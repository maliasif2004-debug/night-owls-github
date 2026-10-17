<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>DBZ Hoodies - Anime Store</title>

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
    <h1>🐉 Dragon Ball Z Hoodies Collection</h1>

    <div class="container">

        <div class="card">
            <img src="dbz1.jpg">
            <b>Goku Super Saiyan Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Goku Super Saiyan Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz2.jpg">
            <b>Vegeta Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Vegeta Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz3.jpg">
            <b>Dragon Ball Z Logo Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Dragon Ball Z Logo Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz4.jpg">
            <b>Goku Ultra Instinct Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Goku Ultra Instinct Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz5.jpg">
            <b>Vegeta Blue Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Vegeta Blue Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz6.jpg">
            <b>Gohan Beast Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Gohan Beast Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz7.jpg">
            <b>Piccolo Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Piccolo Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz8.jpg">
            <b>Trunks Future Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Trunks Future Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz9.jpg">
            <b>Frieza Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Frieza Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz10.jpg">
            <b>Broly Legendary Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Broly Legendary Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz11.jpg">
            <b>Majin Buu Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Majin Buu Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz12.jpg">
            <b>Cell Perfect Form Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Cell Perfect Form Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz13.jpg">
            <b>Beerus Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Beerus Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz14.jpg">
            <b>Whis Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Whis Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz15.jpg">
            <b>Gotenks Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Gotenks Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz16.jpg">
            <b>Krillin Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Krillin Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz17.jpg">
            <b>Master Roshi Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Master Roshi Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz18.jpg">
            <b>Dragon Shenron Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Dragon Shenron Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz19.jpg">
            <b>Capsule Corp Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Capsule Corp Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="dbz20.jpg">
            <b>Dragon Ball Super Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Dragon Ball Super Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

    </div>
 

 <footer>
        <b>© 2026 Night Owls Anime Store</b>
    </footer>


</body>
</html>