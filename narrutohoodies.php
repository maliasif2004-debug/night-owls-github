<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Naruto Hoodies - Anime Store</title>

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
    <h1>🍥 Naruto Hoodies Collection</h1>

    <div class="container">

        <div class="card">
            <img src="naruto1.jpg">
            <b>Naruto Hokage Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Naruto Hokage Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto2.jpg">
            <b>Naruto Uzumaki Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Naruto Uzumaki Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto3.jpg">
            <b>Akatsuki Cloud Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Akatsuki Cloud Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto4.jpg">
            <b>Itachi Uchiha Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Itachi Uchiha Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto5.jpg">
            <b>Sasuke Uchiha Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Sasuke Uchiha Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto6.jpg">
            <b>Kakashi Hatake Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Kakashi Hatake Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto7.jpg">
            <b>Sharingan Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Sharingan Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto8.jpg">
            <b>Kurama Nine Tails Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Kurama Nine Tails Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto9.jpg">
            <b>Hidden Leaf Village Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Hidden Leaf Village Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto10.jpg">
            <b>Minato Namikaze Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Minato Namikaze Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto11.jpg">
            <b>Jiraiya Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Jiraiya Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto12.jpg">
            <b>Gaara Sand Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Gaara Sand Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto13.jpg">
            <b>Shikamaru Nara Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Shikamaru Nara Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto14.jpg">
            <b>Hinata Hyuga Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Hinata Hyuga Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto15.jpg">
            <b>Neji Hyuga Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Neji Hyuga Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto16.jpg">
            <b>Madara Uchiha Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Madara Uchiha Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto17.jpg">
            <b>Obito Uchiha Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Obito Uchiha Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto18.jpg">
            <b>Pain Akatsuki Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Pain Akatsuki Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto19.jpg">
            <b>Team 7 Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Team 7 Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="naruto20.jpg">
            <b>Naruto Shippuden Hoodie</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Naruto Shippuden Hoodie">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

    </div>

 <footer>
        <b>© 2026 Night Owls Anime Store</b>
    </footer>

</body>
</html>