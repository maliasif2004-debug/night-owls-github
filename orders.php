<?php
$conn = new mysqli("localhost", "root", "", "night_owls_store");

if ($conn->connect_error) {
    die("DB Error: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM orders");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Order Success</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #111;
            color: white;
            text-align: center;
        }

        h1 {
            padding: 20px;
            color: #00ffff;
        }

        .box {
            width: 60%;
            margin: auto;
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 12px;
        }

        .item {
            padding: 10px;
            margin: 10px;
            background: rgba(0,0,0,0.5);
            border-radius: 8px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #00ffff;
            text-decoration: none;
        }
    </style>
</head>

<body>

<h1>🎉 Order Confirmed Successfully!</h1>

<div class="box">

    <h2>📦 Your Orders</h2>

    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<div class='item'>🧥 " . $row['product_name'] . "</div>";
    }
    ?>

</div>

<a href="otherhoodie.php">⬅ Back to Store</a>

</body>
</html>