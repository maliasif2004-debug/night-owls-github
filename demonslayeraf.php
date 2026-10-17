<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Demon Slayer Action Figures - Anime Store</title>

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
    <h1>⚔️ Demon Slayer Action Figures Collection</h1>

    <div class="container">

        <div class="card">
            <img src="demons1.jpg">
            <b>Tanjiro Kamado Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Tanjiro Kamado Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons2.jpg">
            <b>Nezuko Kamado Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Nezuko Kamado Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons3.jpg">
            <b>Zenitsu Agatsuma Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Zenitsu Agatsuma Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons4.jpg">
            <b>Inosuke Hashibira Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Inosuke Hashibira Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons5.jpg">
            <b>Giyu Tomioka Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Giyu Tomioka Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons6.jpg">
            <b>Kyojuro Rengoku Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Kyojuro Rengoku Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons7.jpg">
            <b>Shinobu Kocho Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Shinobu Kocho Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons8.jpg">
            <b>Tengen Uzui Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Tengen Uzui Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons9.jpg">
            <b>Mitsuri Kanroji Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Mitsuri Kanroji Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons10.jpg">
            <b>Muichiro Tokito Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Muichiro Tokito Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons11.jpg">
            <b>Obanai Iguro Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Obanai Iguro Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons12.jpg">
            <b>Sanemi Shinazugawa Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Sanemi Shinazugawa Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons13.jpg">
            <b>Gyomei Himejima Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Gyomei Himejima Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons14.jpg">
            <b>Akaza Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Akaza Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons15.jpg">
            <b>Muzan Kibutsuji Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Muzan Kibutsuji Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons16.jpg">
            <b>Daki Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Daki Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons17.jpg">
            <b>Gyutaro Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Gyutaro Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons18.jpg">
            <b>Rui Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Rui Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons19.jpg">
            <b>Tanjiro Hinokami Kagura Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Tanjiro Hinokami Kagura Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="demons20.jpg">
            <b>Nezuko Demon Form Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Nezuko Demon Form Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

    </div>


    <footer>
        <b>&copy; 2026 Night Owls Anime Store</b>
    </footer>


</body>
</html>