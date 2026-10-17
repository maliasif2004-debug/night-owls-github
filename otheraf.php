<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Other Anime Action Figures - Anime Store</title>

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
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
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
    <h1>🌟 Other Anime Action Figures Collection</h1>

    <div class="container">

        <div class="card">
            <img src="other1.jpg">
            <b>Eren Yeager Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Eren Yeager Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other2.jpg">
            <b>Levi Ackerman Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Levi Ackerman Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other3.jpg">
            <b>Mikasa Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Mikasa Ackerman Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other4.jpg">
            <b>Monkey D. Luffy Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Monkey D. Luffy Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other5.jpg">
            <b>Roronoa Zoro Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Roronoa Zoro Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other6.jpg">
            <b>Sanji Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Sanji Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other7.jpg">
            <b>Ichigo Kurosaki Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Ichigo Kurosaki Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other8.jpg">
            <b>Rukia Kuchiki Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Rukia Kuchiki Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other9.jpg">
            <b>Ken Kaneki Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Ken Kaneki Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other10.jpg">
            <b>Light Yagami Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Light Yagami Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other11.jpg">
            <b>L Lawliet Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="L Lawliet Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other12.jpg">
            <b>Edward Elric Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Edward Elric Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other13.jpg">
            <b>Alphonse Elric Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Alphonse Elric Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other14.jpg">
            <b>Gon Freecss Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Gon Freecss Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other15.jpg">
            <b>Killua Zoldyck Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Killua Zoldyck Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other16.jpg">
            <b>Izuku Midoriya Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Izuku Midoriya Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other17.jpg">
            <b>Katsuki Bakugo Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Katsuki Bakugo Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other18.jpg">
            <b>Shoto Todoroki Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Shoto Todoroki Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other19.jpg">
            <b>Asta Black Clover Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Asta Black Clover Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="other20.jpg">
            <b>Denji Chainsaw Man Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Denji Chainsaw Man Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

 
    </div>

    <footer>
        <b>&copy; 2026 Night Owls Anime Store</b>
    </footer>


</body>
</html>