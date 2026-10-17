<?php
include "db.php";


if (isset($_POST['remove_item'])) {

    $cart_id = (int) $_POST['cart_id'];

    $delete_sql = "DELETE FROM cart WHERE id = $cart_id";

    if ($conn->query($delete_sql)) {
        header("Location: cart.php?removed=1");
        exit();
    } else {
        die("Remove Failed: " . $conn->error);
    }
}


$result = $conn->query("SELECT * FROM cart");
$cart_count = $result ? $result->num_rows : 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Cart - Night Owls Anime Store</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            color: #ffffff;
            background:
                linear-gradient(rgba(5, 5, 15, 0.88), rgba(5, 5, 15, 0.94)),
                url("pccccccccc.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 8%;
            background: rgba(0, 0, 0, 0.78);
            border-bottom: 1px solid rgba(0, 255, 255, 0.35);
        }

        .logo {
            color: #00ffff;
            font-size: 22px;
            font-weight: bold;
            text-decoration: none;
        }

        .home-btn {
            padding: 10px 16px;
            color: #071313;
            background: #00ffff;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .home-btn:hover {
            background: #00cccc;
        }

        .cart-container {
            width: min(900px, 92%);
            margin: 45px auto;
        }

        .cart-heading {
            margin-bottom: 25px;
            text-align: center;
        }

        .cart-heading h1 {
            margin: 0;
            font-size: 34px;
            color: #00ffff;
        }

        .cart-heading p {
            color: #c8d3d3;
        }

        .success-message {
            margin: 15px auto 25px;
            padding: 12px;
            max-width: 500px;
            text-align: center;
            color: white;
            background: rgba(31, 143, 58, 0.85);
            border-radius: 8px;
        }

        .cart-list {
            display: grid;
            gap: 15px;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            padding: 20px 24px;
            background: rgba(10, 18, 28, 0.86);
            border: 1px solid rgba(0, 255, 255, 0.35);
            border-radius: 14px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product-icon {
            display: grid;
            place-items: center;
            width: 45px;
            height: 45px;
            font-size: 22px;
            background: rgba(0, 255, 255, 0.13);
            border: 1px solid rgba(0, 255, 255, 0.4);
            border-radius: 12px;
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
        }

        .remove-btn {
            padding: 10px 14px;
            color: white;
            background: #e63946;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.25s;
        }

        .remove-btn:hover {
            background: #b91c2a;
            transform: translateY(-2px);
        }

        .empty-cart {
            padding: 45px 20px;
            text-align: center;
            background: rgba(10, 18, 28, 0.86);
            border: 1px dashed rgba(0, 255, 255, 0.5);
            border-radius: 14px;
        }

        .empty-cart h2 {
            color: #00ffff;
        }

        .shop-btn {
            display: inline-block;
            margin-top: 12px;
            padding: 11px 18px;
            color: #071313;
            background: #00ffff;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

 
        .checkout-area {
            margin-top: 28px;
            text-align: center;
        }

        .checkout-btn {
            display: inline-block;
            padding: 14px 24px;
            color: #071313;
            background: #00ffff;
            border-radius: 10px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: 0.25s;
        }

        .checkout-btn:hover {
            background: #00cccc;
            transform: translateY(-3px);
        }

        @media (max-width: 600px) {
            .box {
                padding: 16px;
            }

            .product-name {
                font-size: 15px;
            }

            .remove-btn {
                padding: 9px 10px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <a href="home.php" class="logo">🌙 Night Owls Store</a>
        <a href="home.php" class="home-btn">⬅ Home</a>
    </nav>

    <main class="cart-container">

        <div class="cart-heading">
            <h1>🛒 Your Cart</h1>
            <p>Your selected anime items are shown below.</p>
        </div>

        <?php if (isset($_GET['removed'])) { ?>
            <div class="success-message">
                ✅ Item removed from cart successfully!
            </div>
        <?php } ?>

        <div class="cart-list">

            <?php if ($cart_count > 0) { ?>

                <?php while ($row = $result->fetch_assoc()) { ?>

                    <div class="box">
                        <div class="product-info">
                            <div class="product-icon">🎁</div>

                            <div class="product-name">
                                <?php echo htmlspecialchars($row['product_name']); ?>
                            </div>
                        </div>

                        <form method="POST" onsubmit="return confirm('Remove this item from cart?');">
                            <input type="hidden" name="cart_id" value="<?php echo $row['id']; ?>">

                            <button type="submit" name="remove_item" class="remove-btn">
                                🗑 Remove
                            </button>
                        </form>
                    </div>

                <?php } ?>

            <?php } else { ?>

                <div class="empty-cart">
                    <h2>Your cart is empty 😔</h2>
                    <p>Add some anime products and they will appear here.</p>
                    <a href="product.php" class="shop-btn">Shop Now</a>
                </div>

            <?php } ?>

        </div>

        <!-- This must be here: after cart-list and inside main -->
        <?php if ($cart_count > 0) { ?>
            <div class="checkout-area">
                <a href="checkout.php" class="checkout-btn">
                    🚚 Proceed to Delivery
                </a>
            </div>
        <?php } ?>

    </main>

</body>
</html>