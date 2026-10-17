<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['fullName'];
?>

<!DOCTYPE html>
<html>

<head>

<title>Night Owls Anime Store</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:url("new.jpg");
background-size:cover;
background-attachment:fixed;
color:white;
}
.navbar{
display:flex;
justify-content:space-between;
align-items:center;
padding:18px 60px;
background:rgba(0,0,0,.85);
backdrop-filter:blur(8px);
}
.search-box{
display:flex;
align-items:center;
gap:8px;
}

.search-box input{
padding:10px;
width:230px;
border:none;
border-radius:8px;
outline:none;
font-size:15px;
}

.search-box button{
padding:10px 15px;
border:none;
border-radius:8px;
background:#00ffff;
font-weight:bold;
cursor:pointer;
transition:.3s;
}

.search-box button:hover{
background:#00cccc;
}
.logo{
font-size:28px;
font-weight:bold;
color:#00ffff;
}

.nav-links a{
text-decoration:none;
color:white;
margin-left:20px;
font-weight:bold;
transition:.3s;
}

.nav-links a:hover{
color:#00ffff;
}



.hero{
width:90%;
margin:40px auto;
background:rgba(0,0,0,.7);
padding:50px;
border-radius:20px;
text-align:center;
box-shadow:0 0 20px rgba(0,255,255,.2);
}

.hero h1{
font-size:42px;
color:#00ffff;
}

.hero h2{
margin-top:15px;
font-size:24px;
}

.hero p{
margin-top:20px;
font-size:18px;
color:#ddd;
}

.shop-btn{
display:inline-block;
margin-top:30px;
padding:15px 35px;
background:#00ffff;
color:black;
font-size:18px;
font-weight:bold;
text-decoration:none;
border-radius:10px;
transition:.3s;
}

.shop-btn:hover{
background:#00cccc;
transform:scale(1.05);
}



.section-title{
text-align:center;
margin-top:50px;
font-size:32px;
color:#00ffff;
}



.cards{
display:flex;
justify-content:center;
gap:30px;
margin:40px;
flex-wrap:wrap;
}

.card{
width:260px;
background:rgba(0,0,0,.75);
border-radius:15px;
overflow:hidden;
transition:.3s;
box-shadow:0 0 15px rgba(0,0,0,.6);
}

.card:hover{
transform:translateY(-8px);
box-shadow:0 0 20px cyan;
}

.card img{
width:100%;
height:220px;
object-fit:cover;
}

.card h3{
padding:15px;
text-align:center;
}

.card a{
display:block;
text-align:center;
background:#00ffff;
color:black;
padding:12px;
text-decoration:none;
font-weight:bold;
}

.card a:hover{
background:#00cccc;
}



.features{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:20px;
width:80%;
margin:40px auto;
}

.feature{
background:rgba(0,0,0,.75);
padding:20px;
border-radius:12px;
font-size:18px;
text-align:center;
transition:.3s;
}

.feature:hover{
background:#00ffff;
color:black;
}

footer{
margin-top:50px;
padding:20px;
text-align:center;
background:rgba(0,0,0,.85);
color:#ddd;
}

@media(max-width:768px){

.features{
grid-template-columns:1fr;
}

.navbar{
flex-direction:column;
}

.nav-links{
margin-top:15px;
}

}

</style>

</head>

<body>



<div class="navbar">

<div class="logo">
🦉 Night Owls
</div>

<div class="search-box">

<input
type="text"
id="search"
placeholder="Search products...">

<button onclick="searchProduct()">
🔍
</button>

</div>

<div class="nav-links">





<a href="cart.php">Cart</a>

<a href="about.php">About</a>

<a href="contact.php">Contact</a>

<a href="logout.php">Logout</a>

</div>

</div></div>

<div class="hero">

<h1>Welcome <?php echo htmlspecialchars($name); ?> </h1>

<h2>🔥 Explore the Ultimate Anime Collection 🔥</h2>

<p>

Discover premium hoodies, action figures, backpacks and much more.

</p>



</div>

<h2 class="section-title">

Featured Categories

</h2>

<div class="cards">

<div class="card">

<img src="hoodies.jpg">

<h3>Anime Hoodies</h3>

<a href="hoodies.php">

View Collection

</a>

</div>

<div class="card">

<img src="actionfigure.jpg">

<h3>Action Figures</h3>

<a href="actionfigure.php">

View Collection

</a>

</div>

<div class="card">

<img src="baggs.jpg">

<h3>Anime Bags</h3>

<a href="bags.php">

View Collection

</a>

</div>

</div>

<h2 class="section-title">

Why Choose Night Owls?

</h2>

<div class="features">

<div class="feature">

✔ Premium Anime Merchandise

</div>

<div class="feature">

🚚 Fast Delivery

</div>

<div class="feature">

💵 Cash On Delivery

</div>

<div class="feature">

⭐ Trusted Anime Store

</div>

</div>

<footer>

© 2026 Night Owls Anime Store <br><br>


</footer>
<script>

function searchProduct(){

let search=document.getElementById("search").value.toLowerCase().trim();

if(search=="hoodie" ||
search=="hoodies" ||
search=="anime hoodie"){

window.location.href="hoodies.php";

}

else if(search=="action figure" ||
search=="figure" ||
search=="figures"){

window.location.href="actionfigure.php";

}

else if(search=="bag" ||
search=="bags" ||
search=="backpack"){

window.location.href="bags.php";

}

else if(search==""){

alert("Please enter a product.");

}

else{

alert("Product not found.");

}

}


document.getElementById("search").addEventListener("keypress",function(e){

if(e.key==="Enter"){

searchProduct();

}

});

</script>
</body>

</html>