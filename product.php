<!DOCTYPE html>
<html>

<head>
    <title>Products - Night Owls Anime Store</title>

    <style>

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

        h2 {
            text-align: center;
            color: #ddd;
            margin-top: -10px;
        }
.search-box{
    text-align:center;
    margin:20px 0 30px;
}

.search-box input{
    width:320px;
    padding:12px;
    border:none;
    border-radius:8px;
    font-size:15px;
    outline:none;
}

.search-box input:focus{
    box-shadow:0 0 10px #00ffff;
}

.search-box button{
    padding:12px 18px;
    border:none;
    border-radius:8px;
    background:#00ffff;
    color:black;
    font-weight:bold;
    cursor:pointer;
    margin-left:8px;
}

.search-box button:hover{
    background:#00cccc;
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
            cursor: pointer;
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

        .view-btn {
            margin-top: 10px;
            padding: 8px 12px;

            background: #00ffff;
            border: none;
            border-radius: 6px;

            cursor: pointer;
            font-weight: bold;
            width: 100%;
        }

        .view-btn:hover {
            background: #00cccc;
        }

        .selected {
            box-shadow: 0 0 20px #00ffff;
        }

        .nav {
            text-align: center;
            margin-top: 30px;
        }

        .nav a {
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        .home {
            color: #00f5ff;
        }

        .about {
            color: #00f5ff;
        }

        .contact {
            color: #00f5ff;
        }

        .logout {
            color: #00f5ff;
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

    <h1>🛍️ Anime Merchandise</h1>

    <h2>Explore The Legendary Collection</h2>
<div class="search-box">

    <input
        type="text"
        id="search"
        placeholder="🔍 Search products (Hoodies, Figures, Bags)"
    >

    <button onclick="searchProduct()">
        Search
    </button>

</div>
    <div class="container">

        <div class="card" onclick="selectCard(this)">
            <img src="hoodies.jpg">
            <h3>Anime Hoodies</h3>
            <button class="view-btn" onclick="openPage('hoodies.php')">View Product</button>
        </div>

        <div class="card" onclick="selectCard(this)">
            <img src="actionfigure.jpg">
            <h3>Action Figures</h3>
            <button class="view-btn" onclick="openPage('actionfigure.php')">View Product</button>
        </div>

        <div class="card" onclick="selectCard(this)">
            <img src="baggs.jpg">
            <h3>Anime Bags</h3>
            <button class="view-btn" onclick="openPage('bags.php')">View Product</button>
        </div>

    </div>

    <div class="nav">

        <a href="home.php" class="home">Home</a> |
        <a href="about.php" class="about">About</a> |
        <a href="contact.php" class="contact">Contact</a> |
        <a href="login.php" class="logout">Logout</a>

    </div>

    <hr width="60%">

    <footer>
        <b>&copy; 2026 Night Owls Anime Store</b>
    </footer>

    <script>

        function selectCard(card) {

            let cards = document.querySelectorAll(".card");

            cards.forEach(c => c.classList.remove("selected"));

            card.classList.add("selected");

        }

        function openPage(page) {

            window.location.href = page;

        }
function selectCard(card) {

    let cards = document.querySelectorAll(".card");

    cards.forEach(c => c.classList.remove("selected"));

    card.classList.add("selected");

}

function openPage(page) {

    window.location.href = page;

}

function searchProduct() {

    let search = document.getElementById("search").value.toLowerCase().trim();

    // Dragon Ball Z
    if ((search.includes("dragon") || search.includes("dbz") || search.includes("goku")) && search.includes("hoodie")) {
        window.location.href = "dbzhoodie.php";
    }

    else if ((search.includes("dragon") || search.includes("dbz") || search.includes("goku")) &&
            (search.includes("figure") || search.includes("action"))) {
        window.location.href = "dbzaf.php";
    }

    else if ((search.includes("dragon") || search.includes("dbz") || search.includes("goku")) && search.includes("bag")) {
        window.location.href = "dbzbag.php";
    }

    // Naruto
    else if (search.includes("naruto") && search.includes("hoodie")) {
        window.location.href = "narutohoodies.php";
    }

    else if (search.includes("naruto") &&
            (search.includes("figure") || search.includes("action"))) {
        window.location.href = "narutoaf.php";
    }

    else if (search.includes("naruto") && search.includes("bag")) {
        window.location.href = "narutobag.php";
    }

    // Jujutsu Kaisen
    else if ((search.includes("jjk") || search.includes("jujutsu")) && search.includes("hoodie")) {
        window.location.href = "jjkhoodie.php";
    }

    else if ((search.includes("jjk") || search.includes("jujutsu")) &&
            (search.includes("figure") || search.includes("action"))) {
        window.location.href = "jjkaf.php";
    }

    else if ((search.includes("jjk") || search.includes("jujutsu")) && search.includes("bag")) {
        window.location.href = "jjkbag.php";
    }

    // Other Anime
    else if (search.includes("other") && search.includes("hoodie")) {
        window.location.href = "otherhoodie.php";
    }

    else if (search.includes("other") &&
            (search.includes("figure") || search.includes("action"))) {
        window.location.href = "otheraf.php";
    }

    else if (search.includes("other") && search.includes("bag")) {
        window.location.href = "otherbag.php";
    }

    // General Categories
    else if (search.includes("hoodie")) {
        window.location.href = "hoodies.php";
    }

    else if (search.includes("bag")) {
        window.location.href = "bags.php";
    }

    else if (search.includes("figure") || search.includes("action")) {
        window.location.href = "actionfigure.php";
    }

    else {
        alert("❌ No matching product found!");
    }

}
    </script>

</body>

</html>