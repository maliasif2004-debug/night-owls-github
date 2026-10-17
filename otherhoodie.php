<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Other Anime Hoodies - Anime Store</title>

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
    <h1>🌟 Other Anime Hoodies Collection</h1>

    <div class="container">

        <!-- 1 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Attack on Titan Hoodie">
            <div class="card">
                <img src="otherhoodie1.jpg">
                <b>Attack on Titan Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 2 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Levi Ackerman Hoodie">
            <div class="card">
                <img src="otherhoodie2.jpg">
                <b>Levi Ackerman Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 3 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Eren Yeager Hoodie">
            <div class="card">
                <img src="otherhoodie3.jpg">
                <b>Eren Yeager Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 4 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Monkey D. Luffy Hoodie">
            <div class="card">
                <img src="otherhoodie4.jpg">
                <b>Monkey D. Luffy Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 5 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Roronoa Zoro Hoodie">
            <div class="card">
                <img src="otherhoodie5.jpg">
                <b>Roronoa Zoro Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 6 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Sanji Hoodie">
            <div class="card">
                <img src="otherhoodie6.jpg">
                <b>Sanji Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 7 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Ichigo Kurosaki Hoodie">
            <div class="card">
                <img src="otherhoodie7.jpg">
                <b>Ichigo Kurosaki Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 8 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Ken Kaneki Hoodie">
            <div class="card">
                <img src="otherhoodie8.jpg">
                <b>Ken Kaneki Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 9 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Edward Elric Hoodie">
            <div class="card">
                <img src="otherhoodie9.jpg">
                <b>Edward Elric Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 10 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Gon Freecss Hoodie">
            <div class="card">
                <img src="otherhoodie10.jpg">
                <b>Gon Freecss Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 11 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Killua Zoldyck Hoodie">
            <div class="card">
                <img src="otherhoodie11.jpg">
                <b>Killua Zoldyck Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 12 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Asta Black Clover Hoodie">
            <div class="card">
                <img src="otherhoodie12.jpg">
                <b>Asta Black Clover Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 13 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Izuku Midoriya Hoodie">
            <div class="card">
                <img src="otherhoodie13.jpg">
                <b>Izuku Midoriya Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 14 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Katsuki Bakugo Hoodie">
            <div class="card">
                <img src="otherhoodie14.jpg">
                <b>Katsuki Bakugo Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 15 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Shoto Todoroki Hoodie">
            <div class="card">
                <img src="otherhoodie15.jpg">
                <b>Shoto Todoroki Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 16 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Chainsaw Man Hoodie">
            <div class="card">
                <img src="otherhoodie16.jpg">
                <b>Chainsaw Man Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 17 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Denji Hoodie">
            <div class="card">
                <img src="otherhoodie17.jpg">
                <b>Denji Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 18 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Death Note Hoodie">
            <div class="card">
                <img src="otherhoodie18.jpg">
                <b>Death Note Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 19 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Light Yagami Hoodie">
            <div class="card">
                <img src="otherhoodie19.jpg">
                <b>Light Yagami Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

        <!-- 20 -->
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_name" value="Anime Legends Hoodie">
            <div class="card">
                <img src="520.jpg">
                <b>Anime Legends Hoodie</b><br>
                <button type="submit">Add to Cart</button>
            </div>
        </form>

    </div>


    <footer>
        <b>&copy; 2026 Night Owls Anime Store</b>
    </footer>


</body>
</html>