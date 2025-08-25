<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | LOREM5 Controllers</title>
    <link rel="icon" type="image/png" href="assests/images/logoTItle.png" />

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: linear-gradient(45deg, black, #bab9b9, #fffdfc, whitesmoke);
            background-size: 300% 300%;
            animation: color 12s ease-in-out infinite;
            font-family: 'Roboto', sans-serif;
            padding-top: 70px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        @keyframes color {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .content {
            flex: 1;
            min-height: 80vh;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
        }

        .about-left {
            flex: 1 1 300px;
            padding: 2rem;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        .about-left h1 {
            font-size: 2.5rem;
            text-transform: uppercase;
            color: #000;
            margin-bottom: 1rem;
        }

        .about-left p {
            font-size: 1.1rem;
            color: #000;
            margin-bottom: 1.5rem;
        }

        .about-right {
            flex: 2 1 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .about-img {
            width: 320px;
            max-width: 100%;
            border-radius: 1rem;
            box-shadow: 0 5px 20px rgba(17, 0, 17, 0.15);
            margin-bottom: 1.5rem;
        }

        .about-right h2 {
            font-size: 1.5rem;
            color: #470f4a;
            margin-bottom: 1rem;
        }

        .about-right ul {
            font-size: 1.1rem;
            color: #000;
            padding-left: 1.2rem;
        }

        .about-right li {
            margin-bottom: 0.5rem;
        }

        @media (max-width: 900px) {
            .content {
                flex-direction: column;
            }

            .about-right,
            .about-left {
                padding: 1rem;
            }
        }

        @media (max-width: 600px) {
            .about-left h1 {
                font-size: 1.5rem;
            }

            .about-img {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation bar -->
    <?php include("navbar.php"); ?>

    <div class="content">
        <div class="about-left">
            <h1>About LOREM5 Controllers</h1>
            <p>
                At LOREM5 Controllers, we believe gaming is more than just a hobby—it's a lifestyle. Since our founding
                in 2024, we've been dedicated to delivering the most stylish, high-quality, and customizable PS5
                controllers and accessories for gamers everywhere.
            </p>
            <p>
                Our mission is to empower players to express themselves through their gear, offering unique skins,
                pro-level hardware, and unbeatable customer support.
            </p>
        </div>

        <div class="about-right">
            <img src="assests/images/logoBlack.png" alt="About Us" class="about-img">
            <h2>Why Choose Us?</h2>
            <ul>
                <li>Premium, hand-checked controller skins and accessories</li>
                <li>Exclusive limited editions and collaborations</li>
                <li>Fast shipping and secure checkout</li>
                <li>Friendly, responsive support team</li>
                <li>Passion for gaming and innovation</li>
            </ul>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-md-left">
            <div class="row text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <h5 class="text-uppercase fw-bold mb-4">PS5 Store</h5>
                    <p>Your ultimate destination for custom PS5 controllers, trending accessories, and limited edition
                        designs.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h5 class="text-uppercase fw-bold mb-4">Products</h5>
                    <p><a href="#" class="text-white text-decoration-none">DualSense</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Skins</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Wireless</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Limited Editions</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h5 class="text-uppercase fw-bold mb-4">Useful Links</h5>
                    <p><a href="home.php" class="text-white text-decoration-none">Home</a></p>
                    <p><a href="login.html" class="text-white text-decoration-none">Login</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Trending</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Support</a></p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h5 class="text-uppercase fw-bold mb-4">Contact</h5>
                    <p><i class="fa fa-home me-3"></i> Rajasthan, India</p>
                    <p><i class="fa fa-envelope me-3"></i> lorem5@ps5store.com</p>
                    <p><i class="fa fa-phone me-3"></i> +91 9887515862</p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <hr class="bg-white mt-4">
            <div class="text-center py-3">
                &copy; LOREM5 PS5Store. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleBtn = document.getElementById("searchToggle");
            const searchForm = document.getElementById("searchForm");

            toggleBtn.addEventListener("click", function () {
                searchForm.classList.toggle("d-none");
            });
        });
    </script>
</body>

</html>