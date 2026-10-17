<?php
include "db.php";

$order_confirmed = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = trim($_POST['full_name']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);

    if ($full_name != "" && $phone != "" && $address != "") {


        $product_list = "";

        $result = $conn->query("SELECT product_name FROM cart");

        while ($row = $result->fetch_assoc()) {
            $product_list .= $row['product_name'] . ", ";
        }

           $product_list = rtrim($product_list, ", ");

  
        $sql = "INSERT INTO orders
                (full_name, phone, address, payment_method, product_names)
                VALUES
                ('$full_name', '$phone', '$address', 'Cash on Delivery', '$product_list')";

        if ($conn->query($sql)) {
            $conn->query("DELETE FROM cart");

            $order_confirmed = true;

        } else {
            die("Order Failed: " . $conn->error);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout - Night Owls Anime Store</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: white;
            background:
                linear-gradient(rgba(5, 5, 15, 0.88), rgba(5, 5, 15, 0.94)),
                url("pccccccccc.jpg");
            background-size: cover;
            background-position: center;
        }

        .checkout-box {
            width: min(450px, 92%);
            padding: 35px;
            text-align: center;
            background: rgba(10, 18, 28, 0.9);
            border: 1px solid rgba(0, 255, 255, 0.45);
            border-radius: 16px;
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.15);
        }

        h1 {
            margin-top: 0;
            color: #00ffff;
        }

        p {
            color: #d2dddd;
            line-height: 1.5;
        }

        input,
        textarea {
            width: 100%;
            margin-top: 12px;
            padding: 12px;
            border: none;
            outline: none;
            border-radius: 8px;
            font-size: 14px;
        }

        input:focus,
        textarea:focus {
            box-shadow: 0 0 8px #00ffff;
        }

        .cod-box {
            margin-top: 18px;
            padding: 14px;
            color: #00ffff;
            background: rgba(0, 255, 255, 0.1);
            border: 1px solid rgba(0, 255, 255, 0.35);
            border-radius: 10px;
            font-weight: bold;
        }

        .confirm-btn,
        .back-btn {
            display: inline-block;
            width: 100%;
            margin-top: 16px;
            padding: 12px;
            color: #071313;
            background: #00ffff;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.25s;
        }

        .confirm-btn:hover,
        .back-btn:hover {
            background: #00cccc;
            transform: translateY(-2px);
        }

        .success-icon {
            font-size: 55px;
        }

        .success-text {
            margin: 18px 0;
            font-size: 17px;
            color: white;
        }
    </style>
</head>

<body>

<div class="checkout-box">

<?php if ($order_confirmed) { ?>

    <div class="success-icon">✅</div>

    <h1>Delivery Confirmed!</h1>

    <p class="success-text">
        Your order has been placed successfully.
    </p>

    <p>Please keep the payment ready when your order arrives.</p>

    <a href="home.php" class="back-btn">🏠 Back to Home</a>

<?php } else { ?>

    <h1>🚚 Delivery Details</h1>

    <p>Enter your delivery details to confirm your order.</p>

    <form method="POST">

        <input
            type="text"
            name="full_name"
            placeholder="Full Name"
            required
        >

        <input
            type="text"
            name="phone"
            placeholder="Phone Number"
            required
        >

        <textarea
            name="address"
            rows="5"
            placeholder="Enter Complete Delivery Address"
            required
        ></textarea>

        <div class="cod-box">
            💵 Payment Method: Cash on Delivery
        </div>

        <button type="submit" class="confirm-btn">
            ✅ Confirm Delivery
        </button>

    </form>

    <a href="cart.php" class="back-btn">⬅ Back to Cart</a>

<?php } ?>

</div>

</body>
</html>