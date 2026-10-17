<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Jujutsu Kaisen Hoodies - Anime Store</title>

    <style>


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
    <h1>⚡ Jujutsu Kaisen Hoodies Collection</h1>

    <div class="container">

        <div class="card">
            <img src="jjk1.jpg">
            <b>Gojo Satoru Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Gojo Satoru Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk2.jpg">
            <b>Yuji Itadori Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Yuji Itadori Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk3.jpg">
            <b>Megumi Fushiguro Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Megumi Fushiguro Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk4.jpg">
            <b>Nobara Kugisaki Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Nobara Kugisaki Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk5.jpg">
            <b>Ryomen Sukuna Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Ryomen Sukuna Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk6.jpg">
            <b>Jujutsu High Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Jujutsu High Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk7.jpg">
            <b>Gojo Infinity Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Gojo Infinity Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk8.jpg">
            <b>Sukuna King of Curses Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Sukuna King of Curses Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk9.jpg">
            <b>Toji Fushiguro Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Toji Fushiguro Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk10.jpg">
            <b>Yuta Okkotsu Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Yuta Okkotsu Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk11.jpg">
            <b>Maki Zenin Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Maki Zenin Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk12.jpg">
            <b>Panda Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Panda Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk13.jpg">
            <b>Toge Inumaki Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Toge Inumaki Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk14.jpg">
            <b>Kento Nanami Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Kento Nanami Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk15.jpg">
            <b>Mahito Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Mahito Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk16.jpg">
            <b>Suguru Geto Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Suguru Geto Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk17.jpg">
            <b>Choso Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Choso Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk18.jpg">
            <b>Jogo Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Jogo Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk19.jpg">
            <b>Domain Expansion Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Domain Expansion Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="jjk20.jpg">
            <b>Jujutsu Kaisen Logo Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Jujutsu Kaisen Logo Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

 
    <footer>
        <b>&copy; 2026 Night Owls Anime Store</b>
    </footer>

</body>
</html>