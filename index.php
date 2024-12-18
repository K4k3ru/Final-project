<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCDI Faculty Evaluation System Admin</title>
    <link rel="icon" type="image/x-icon" href="img/ccdi_logo.png">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            background-color: #000; /* Dark background */
            color: #fff; /* White text */
            line-height: 1.6;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px; /* Adjust logo height as needed */
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-left: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
        }

        .hero {
            text-align: center;
            padding: 100px 0;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
            color: #2980b9; /* Blue heading */
        }

        .hero p {
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #2980b9;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        footer {
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .social-icons {
            display: flex;
            width: 90%;
            justify-content: end; /* Horizontally center the icons */
            align-items: center;     /* Vertically center the icons */
        }
        .social-icons a {
            display: inline-block;
            margin: 0 10px; /* Add spacing between icons */
            font-size: 20px; /* Adjust icon size as needed */
            color: #fff;
        }
    </style>
    <script src="https://kit.fontawesome.com/b6ef6d739f.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav>
        <div class="logo">
            <img src="img/ccdi_logo.png" alt="CCDI Logo">
            <span>CCDI Faculty Evaluation System</span>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <section class="hero">
        <h1>EMPOWERING FEEDBACK,<br>Elevating Teaching Excellence</h1>
        <p>Evaluate faculty performance anytime, anywhere. With an easy-to-use interface, students can share valuable feedback, and administrators can generate reports in just a few clicks.</p>
        <a href="login.php" class="btn">GET STARTED</a>
    </section>

    <footer>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>