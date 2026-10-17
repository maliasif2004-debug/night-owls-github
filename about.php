<!DOCTYPE html>
<html>

<head>
    <title>About - Night Owls Anime Store</title>

    <style>

        /* BODY */
        body {
            margin: 0;
            font-family: Arial, sans-serif;

            background-image: url("new.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            color: white;

            display: flex;
            justify-content: center;
            align-items: center;

            height: 100vh;
        }

        /* MAIN BOX */
        .about-box {
            background: rgba(0, 0, 0, 0.75);

            width: 70%;
            max-width: 800px;

            padding: 40px;
            margin: 20px;

            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);

            text-align: center;

            box-shadow: 0 0 25px rgba(0, 0, 0, 0.9);
        }

        /* HEADINGS */
        h1 {
            font-size: 32px;
            font-weight: bold;

            text-shadow: 2px 2px 6px black;
            margin-bottom: 15px;
        }

        h2 {
            margin-top: 25px;
            font-size: 22px;
            color: #00ffff;
        }

        /* PARAGRAPH */
        p {
            font-size: 16px;
            line-height: 1.7;
            letter-spacing: 0.5px;

            text-shadow: 1px 1px 3px black;
        }

        .mission {
            margin-top: 10px;
            font-weight: bold;
        }

        /* BUTTON */
        .btn {
            display: inline-block;

            margin-top: 25px;
            padding: 12px 25px;

            background: linear-gradient(45deg, #00ffff, #00cccc);
            color: black;

            text-decoration: none;
            font-weight: bold;

            border-radius: 10px;

            transition: 0.3s;
        }

        .btn:hover {
            transform: scale(1.05);
        }

    </style>

</head>

<body>

    <div class="about-box">

        <h1>🦉 About Night Owls</h1>

        <p>
            <b>
                Welcome to Night Owls Anime Store! We are passionate about anime culture and bring you the best
                collection of anime merchandise including t-shirts, posters, figures, and more. Our goal is to
                create a community for true anime lovers where they can find their favorite characters and series
                products in one place.
            </b>
        </p>

        <h2>🎯 Our Mission</h2>

        <p class="mission">
            To deliver high-quality anime merchandise and spread anime culture across fans worldwide.
        </p>

        <a href="home.php" class="btn">⬅ Back to Home</a>

    </div>

</body>

</html>