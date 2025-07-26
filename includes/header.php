<?php $activePage = basename($_SERVER['PHP_SELF']); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>REYNS Software Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap + AOS + Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Topbar -->
    <div class="bg-primary text-white text-center py-2">
        <small>Empowering Businesses with Smart Solutions</small>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="/index.php">Dreyns Software Solutions</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <a class="nav-link <?= ($activePage == 'index.php') ? 'active fw-bold text-primary' : '' ?>" href="/index.php">Home</a>
                    <a class="nav-link <?= ($activePage == 'about.php') ? 'active fw-bold text-primary' : '' ?>" href="/about.php">About</a>
                    <a class="nav-link <?= ($activePage == 'services.php') ? 'active fw-bold text-primary' : '' ?>" href="/services.php">Services</a>
                    <a class="nav-link <?= ($activePage == 'products.php') ? 'active fw-bold text-primary' : '' ?>" href="/products.php">Products</a>
                    <a class="nav-link <?= ($activePage == 'ai.php') ? 'active fw-bold text-primary' : '' ?>" href="/ai.php">AI Solutions</a>
                    <a class="nav-link <?= ($activePage == 'contact.php') ? 'active fw-bold text-primary' : '' ?>" href="/contact.php">Contact</a>
                </ul>
            </div>
        </div>
    </nav>