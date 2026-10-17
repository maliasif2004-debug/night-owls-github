<?php include "db.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Naruto Action Figures - Anime Store</title>

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
    <h1>🍥 Naruto Action Figures Collection</h1>

    <div class="container">

        <div class="card">
            <img src="narutoaf1.jpg">
            <b>Naruto Uzumaki Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Naruto Uzumaki Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf2.jpg">
            <b>Sasuke Uchiha Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Sasuke Uchiha Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf3.jpg">
            <b>Sakura Haruno Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Sakura Haruno Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf4.jpg">
            <b>Kakashi Hatake Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Kakashi Hatake Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf5.jpg">
            <b>Itachi Uchiha Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Itachi Uchiha Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf6.jpg">
            <b>Madara Uchiha Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Madara Uchiha Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf7.jpg">
            <b>Obito Uchiha Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Obito Uchiha Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf8.jpg">
            <b>Minato Namikaze Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Minato Namikaze Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf9.jpg">
            <b>Jiraiya Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Jiraiya Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf10.jpg">
            <b>Tsunade Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Tsunade Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf11.jpg">
            <b>Orochimaru Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Orochimaru Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf12.jpg">
            <b>Gaara Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Gaara Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf13.jpg">
            <b>Rock Lee Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Rock Lee Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf14.jpg">
            <b>Neji Hyuga Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Neji Hyuga Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf15.jpg">
            <b>Hinata Hyuga Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Hinata Hyuga Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf16.jpg">
            <b>Shikamaru Nara Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Shikamaru Nara Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf17.jpg">
            <b>Pain Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Pain Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf18.jpg">
            <b>Konan Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Konan Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf19.jpg">
            <b>Kurama Nine Tails Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Kurama Nine Tails Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="narutoaf20.jpg">
            <b>Naruto Sage Mode Figure</b><br>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_name" value="Naruto Sage Mode Figure">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

    </div>

  
    <footer>
        <b>&copy; 2026 Night Owls Anime Store</b>
    </footer>


</body>
</html>