<?php
// includes/header.php
// Usage: set $pageTitle, $pageDescription, $activePage before including
// Example:
//   $pageTitle = 'Home | '.SITE_NAME;
//   $pageDescription = '...';
//   $activePage = 'home';
//   include __DIR__ . '/header.php';

require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle ?? SITE_NAME) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription ?? '') ?>" />

  <!-- vendor styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800&family=Barlow:wght@400;500;600&display=swap" rel="stylesheet" />

  <!-- project styles -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css" />
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="mainNav" aria-label="Main navigation">
  <div class="container">
    <a class="navbar-brand" href="<?= BASE_URL ?>index.php">
      <span class="brand-icon"><i class="bi bi-droplet-fill"></i></span>
      <span class="brand-text">CHROMA<span class="brand-accent">SHIELD</span></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link <?= ($activePage==='home'?'active':'') ?>" href="<?= BASE_URL ?>index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link <?= ($activePage==='about'?'active':'') ?>" href="<?= BASE_URL ?>about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link <?= ($activePage==='products'?'active':'') ?>" href="<?= BASE_URL ?>products.php">Products</a></li>
        <li class="nav-item"><a class="nav-link <?= ($activePage==='white-label'?'active':'') ?>" href="<?= BASE_URL ?>white-label.php">White Label</a></li>
        <li class="nav-item"><a class="nav-link <?= ($activePage==='manufacturing'?'active':'') ?>" href="<?= BASE_URL ?>manufacturing.php">Manufacturing</a></li>
        <li class="nav-item"><a class="nav-link <?= ($activePage==='careers'?'active':'') ?>" href="<?= BASE_URL ?>careers.php">Careers</a></li>
        <li class="nav-item"><a class="nav-link <?= ($activePage==='contact'?'active':'') ?>" href="<?= BASE_URL ?>contact.php">Contact</a></li>
        <li class="nav-item ms-lg-2"><a class="btn btn-accent" href="<?= BASE_URL ?>contact.php#quote">Request Quote</a></li>
      </ul>
    </div>
  </div>
</nav>
