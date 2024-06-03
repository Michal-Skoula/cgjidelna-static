<!DOCTYPE html>
<html lang="cz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require 'global.php' ?>
  <title><?php echo TITLE ?></title>
  <script src="<?php echo BASE_URL . '/js/app.js'?>" defer></script>
  <link rel="stylesheet" href="<?php echo BASE_URL . '/css/style.css'?>">
</head>
<body>
  <!-- <nav class="side-nav">
  </nav> -->
  <header class="header">
    <nav>
      <a href="/" class="logo" aria-label="Home">
        <img class="logo" src="assets/logo.png" alt="Open Menu">
      </a>
      <div role="searchbox" class="search">
        <div class="input">
          <input type="text" placeholder="Vyhledat jídlo">
          <div class="flex-row">
            <button class="button" aria-label="Filter by">
              <img src="assets/ico-filter.svg" alt="Filter">
            </button>
            <button class="button" aria-label="Search food">
              <img style="transform:scaleX(-1)" src="assets/ico-search.svg" alt="Search">
            </button>
          </div>
        </div>
      </div>
      <button id="profile-open-btn" class="button" aria-label="Your profile">
        <img src="assets/ico-menu.svg" alt="Your Profile">
      </button>
    </nav>
  </header>
  <main>
    <div class="side-nav" id="profile-nav">
      <div>
        <button id="profile-open-btn" class="button" aria-label="Your profile">
          <img src="assets/ico-account.svg" alt="Your Profile">
        </button>
        <h1>Ahoj, [jméno]!</h1>
      </div>
      <div class="links">
        <a class="wip" href="/">Profil</a>
        <a href="/">Tvoje Recenze</a>
        <a href="/">Napsat Recenzi</a>
        <a href="/">E-jidelníček</a>
      </div>
      <div>
        <p class="">Made by <a href="https://michalskoula.com">Michal Škoula</a></p>
      </div>
    </div>