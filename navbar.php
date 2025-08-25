<?php
session_start();
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
            <img src="assests/images/logoTItle.png" width="70" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="home.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="trending.php">TRENDING</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">CATEGORIES</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#football">Football</a></li>
                        <li><a class="dropdown-item" href="#anime">Anime</a></li>
                        <li><a class="dropdown-item" href="#exclusive">PS Exclusive</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="about.php">ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>
            </ul>
            <div class="d-flex align-items-center ms-auto me-3">
                <button class="btn btn-outline-light" type="button" id="searchToggle">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="d-none w-100 mt-2 mt-sm-0" id="searchForm">
                <form class="d-flex w-100" action="https://www.google.com/search" method="GET" target="_blank">
                    <input class="form-control me-2" type="text" name="q" placeholder="Search on Google...">
                    <button class="btn btn-outline-light" type="submit">Go</button>
                </form>
            </div>
            <div class="ms-2">
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="logout.php" class="btn btn-outline-light px-3 py-1 d-flex align-items-center gap-2">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                <?php else: ?>
                    <a href="login.html" class="btn btn-outline-light px-3 py-1 d-flex align-items-center gap-2">
                        <i class="fa fa-user"></i> Login
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
