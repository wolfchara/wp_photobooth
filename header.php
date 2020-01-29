<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- <link rel="shortcut icon" type="image/x-icon" href="http://photobooth/wp-content/themes/photobooth/assets/img/icons/favicon.png" /> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Aleo:400,700|Josefin+Sans:300,400,600,700&display=swap&" rel="stylesheet" /> -->
  <!-- <link rel="stylesheet" href="http://photobooth/wp-content/themes/photobooth/assets/css/normalize.css" />
  <link rel="stylesheet" href="http://photobooth/wp-content/themes/photobooth/style.css" /> -->
  <!-- <title>Photobooth</title> -->

<body>
  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="about.html">О НАС</a>
      <a href="services.html">УСЛУГИ</a>
      <a href="gallery.html">ГАЛЕРЕЯ</a>
      <a href="blog.html">БЛОГ</a>
      <a href="info.html">ИНФОРМАЦИЯ</a>
      <a href="contacts.html">КОНТАКТЫ</a>
    </div>
  </div>
  <div class="wrapper">
  <?php wp_nav_menu(array(
      'theme_location'  => 'menu',
      'container'       => 'wrapper',
      'menu_class'      => 'nav__menu',
      'menu_id'         => null
    )); ?>
    <!-- <ul class="nav__menu">
      <li>
        <a href="index.php">ГЛАВНАЯ</a>
      </li>
      <li>
        <a href="about.php">О НАС</a>
      </li>
      <li>
        <a href="services.php">УСЛУГИ</a>
      </li>
      <li>
        <a href="gallery.php">ГАЛЕРЕЯ</a>
      </li>
      <li>
        <a href="blog.php">БЛОГ</a>
      </li>
      <li>
        <a href="info.php">ИНФОРМАЦИЯ</a>
      </li>
      <li>
        <a href="contacts.php">КОНТАКТЫ</a>
      </li>
  </ul> -->
  <div class="nav__menu-mobile">
        <span href="" onclick="openNav()">&#9776;МЕНЮ</span>
      </div>
  </div>
  <?php wp_head() ?>

  </head>