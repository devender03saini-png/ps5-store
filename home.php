<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PS5 Custom Controllers</title>
    <link rel="icon" type="image/png" href="assests/images/logoTItle.png" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Carousel Styles */
        .carousel-container {
            height: 400px;
            overflow: hidden;
            margin-bottom: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .carousel-inner {
            border-radius: 15px;
            overflow: hidden;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Card Styles */
        .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s, box-shadow 0.3s;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-img-top:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            margin-bottom: 20px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .section-spacing {
            margin: 5rem 0;
        }

        body {
            padding-top: 70px;
            background-color: #f8f9fa;
        }

        .section-title {
            position: relative;
            margin-bottom: 2.5rem;
            text-align: center;
        }

        .section-title:after {
            content: "";
            display: block;
            width: 80px;
            height: 3px;
            background: #007bff;
            margin: 15px auto;
        }

        .price {
            color: #dc3545;
            font-weight: bold;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>

    <?php include("navbar.php"); ?>


    <!-- Football Section -->
    <section id="football" class="section-spacing">
        <div class="container">
            <h2 class="section-title">Football Controllers</h2>

            <!-- Football Carousel -->
            <div id="footballCarousel" class="carousel slide carousel-container mb-5" data-bs-ride="carousel"
                data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assests\images\fb 1.jpeg" alt="Football Controller 1">
                    </div>
                    <div class="carousel-item">
                        <img src="assests\images\fb 2.jpeg" alt="Football Controller 2">
                    </div>
                    <div class="carousel-item">
                        <img src="assests\images\fb 3.jpeg" alt="Football Controller 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#footballCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#footballCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- Football Products -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests\images\real emdrid.png" class="card-img-top" alt="Real Madrid Controller">
                        <div class="card-body">
                            <h5 class="card-title">Real Madrid Edition</h5>
                            <p class="card-text">Premium PS5 controller with official Real Madrid branding</p>
                            <p class="price">₹10,499</p>
                            <a href="buy.html" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests/images/barcelona.png" class="card-img-top" alt="Barcelona Controller">
                        <div class="card-body">
                            <h5 class="card-title">FC Barcelona Edition</h5>
                            <p class="card-text">Custom PS5 controller with Blaugrana colors</p>
                            <p class="price">₹9,999</p>
                            <a href="buy.html" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests\images\Bayern Munich-Photoroom.png" class="card-img-top"
                            alt="Bayern Munich Controller">
                        <div class="card-body">
                            <h5 class="card-title">Bayern Munich Edition</h5>
                            <p class="card-text">Limited edition controller with Bavarian design</p>
                            <p class="price">₹11,299</p>
                            <a href="buy.html" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Anime Section -->
    <section id="anime" class="section-spacing bg-light py-5">
        <div class="container">
            <h2 class="section-title">Anime Controllers</h2>

            <!-- Anime Carousel -->
            <div id="animeCarousel" class="carousel slide carousel-container mb-5" data-bs-ride="carousel"
                data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assests\images\b one piece.jpeg" alt="Anime Controller 1">
                    </div>
                    <div class="carousel-item">
                        <img src="assests\images\b naruto.jpeg" alt="Anime Controller 2">
                    </div>
                    <div class="carousel-item">
                        <img src="assests\images\b deamon lsayer.jpeg" alt="Anime Controller 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#animeCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#animeCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- Anime Products -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests\images\gundam.png" class="card-img-top" alt="One Piece Controller">
                        <div class="card-body">
                            <h5 class="card-title">Gundam</h5>
                            <p class="card-text">Gundam , strong & elegant themed PS5 controller</p>
                            <p class="price">₹8,999</p>
                            <a href="buy.html" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests\images\bleach.png" class="card-img-top" alt="Demon Slayer Controller">
                        <div class="card-body">
                            <h5 class="card-title">Bleach Edition</h5>
                            <p class="card-text">Bleach inspire dark and white ,with a skull</p>
                            <p class="price">₹9,499</p>
                            <a href="buy.html" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests\images\pikachu.png" class="card-img-top" alt="Naruto Controller">
                        <div class="card-body">
                            <h5 class="card-title">Pikachu Edition</h5>
                            <p class="card-text">Pikachu yellow with minimal pikachu image</p>
                            <p class="price">₹9,799</p>
                            <a href="buy.html" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PS Exclusive Section -->
    <section id="exclusive" class="section-spacing">
        <div class="container">
            <h2 class="section-title">PS Exclusive Controllers</h2>

            <!-- PS Exclusive Carousel -->
            <div id="psexCarousel" class="carousel slide carousel-container mb-5" data-bs-ride="carousel"
                data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assests\images\bp1.jpeg" alt="PS Exclusive 1">
                    </div>
                    <div class="carousel-item">
                        <img src="assests\images\bp2.jpeg" alt="PS Exclusive 2">
                    </div>
                    <div class="carousel-item">
                        <img src="assests\images\bp3.jpeg" alt="PS Exclusive 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#psexCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#psexCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- PS Exclusive Products -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests\images\spider man classy.png" class="card-img-top"
                            alt="Spider-Man Controller">
                        <div class="card-body">
                            <h5 class="card-title">Spider-Man 2 Edition</h5>
                            <p class="card-text">Official Marvel's Spider-Man 2 limited edition</p>
                            <p class="price">₹12,999</p>
                            <a href="buy.html" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests\images\god of war translucent.png" class="card-img-top"
                            alt="God of War Controller">
                        <div class="card-body">
                            <h5 class="card-title">God of War Ragnarök</h5>
                            <p class="card-text">Kratos and Atreus themed special edition</p>
                            <p class="price">₹13,499</p>
                            <a href="buy.html" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests\images\cyberpunk 2077.png" class="card-img-top" alt="God of War Controller">
                        <div class="card-body">
                            <h5 class="card-title">Cyber Punk 2077</h5>
                            <p class="card-text">Cyber Punk themed special edition</p>
                            <p class="price">₹13,499</p>
                            <a href="buy.html" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

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
                    <p><a href="#football" class="text-white text-decoration-none">Football</a></p>
                    <p><a href="#anime" class="text-white text-decoration-none">Anime</a></p>
                    <p><a href="#exclusive" class="text-white text-decoration-none">PS Exclusive</a></p>
                    <p><a href="#" class="text-white text-decoration-none">All Products</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h5 class="text-uppercase fw-bold mb-4">Useful Links</h5>
                    <p><a href="home.php" class="text-white text-decoration-none">Home</a></p>
                    <p><a href="about.php" class="text-white text-decoration-none">About Us</a></p>
                    <p><a href="contact.php" class="text-white text-decoration-none">Contact</a></p>
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
                &copy; 2024 LOREM5 PS5Store. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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