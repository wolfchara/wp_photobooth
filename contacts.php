<?php
// Template Name: contacts
get_header(); ?>
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="http://photobooth/wp-content/themes/photobooth/assets/img/icons/favicon.png"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Aleo:400,700|Josefin+Sans:300,400,600,700&display=swap&"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />
    <title>Artlook</title>
  </head>
  <body>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="index.html">ГЛАВНАЯ</a>
        <a href="about.html">О НАС</a>
        <a href="services.html">УСЛУГИ</a>
        <a href="gallery.html">ГАЛЕРЕЯ</a>
        <a href="blog.html">БЛОГ</a>
        <a href="info.html">ИНФОРМАЦИЯ</a>
      </div>
    </div>
    <div class="wrapper">
      <div class="nav__menu">
        <div class="nav-menu__item">
          <a href="index.html">ГЛАВНАЯ</a>
        </div>
        <div class="nav-menu__item">
          <a href="about.html">О НАС</a>
        </div>
        <div class="nav-menu__item">
          <a href="services.html">УСЛУГИ</a>
        </div>
        <div class="nav-menu__item">
          <a href="gallery.html">ГАЛЕРЕЯ</a>
        </div>
        <div class="nav-menu__item">
          <a href="blog.html">БЛОГ</a>
        </div>
        <div class="nav-menu__item">
          <a href="info.html">ИНФОРМАЦИЯ</a>
        </div>
        <div class="nav-menu__item">
          <a href="contacts.html">КОНТАКТЫ</a>
        </div>
        <div class="nav__menu-mobile">
          <span href="" onclick="openNav()">&#9776;МЕНЮ</span>
        </div>
      </div>
    </div> -->
    <div class="contact__container">
      <div class="head__title">
        <h2>
          СВЯЖИТЕСЬ С НАМИ
        </h2>
        <hr />
      </div>
      <div class="contacts">
          <p class="telnum"><img src="http://photobooth/wp-content/themes/photobooth/assets/img/icons/call__us.png" alt="call__us"><a href="tel: +7(123)-456-7890">+7(123)-456-7890</a></p>
          <p class="email"><img src="http://photobooth/wp-content/themes/photobooth/assets/img/icons/mail.png" alt="email"><a href="mailto:qwe@gmail.com">qwe@gmail.com</a></p>
          <p class="location"><img src="http://photobooth/wp-content/themes/photobooth/assets/img/icons/location.png" alt="location">Независимости 123/20а</p>
      </div>
    </div>
    <div class="contact_wrapper-form">
        <form action="send.php" method="POST">
            <input type="text" name="flname" placeholder="Имя и Фамилия" required=""><br>
            <input type="email" name="email" placeholder="Ваш Email" required=""><br>
            <input type="tel" name="email" placeholder="Ваш номер телефона" required=""><br>
            <textarea name="message" placeholder="Ваше сообщение" required=""></textarea><br>
            <div class="contacts__button">
              <a href="http://photobooth/wp-content/themes/photobooth/assets/contacts.html"><button class="price__button">Контакты</button></a>
            </div>
        </form>
    </div>
    <!-- <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d779.4575920282467!2d24.710341450551557!3d48.919728800259136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1579007299243!5m2!1suk!2sua"
        width="100%"
        height="450"
        frameborder="0"
        style="border:0;"
        allowfullscreen=""
      ></iframe>
    </div>
    <div class="call">
      <a class="call-to-us" href="tel: +7(123)-456-7890"
        ><img src="http://photobooth/wp-content/themes/photobooth/assets/img/icons/call.png" alt="call"
      /></a>
    </div>
    <footer>
      <div class="footer">
        <a href="http://facebook.com" class="facebook">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="25"
            height="25"
            viewBox="0 0 24 24"
            style=" fill:#000000;"
          >
            <path
              d="M12,0C5.373,0,0,5.373,0,12c0,6.016,4.432,10.984,10.206,11.852V15.18H7.237v-3.154h2.969V9.927c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L16.73,15.18h-3.106v8.697 C19.481,23.083,24,18.075,24,12C24,5.373,18.627,0,12,0z"
            ></path>
          </svg>
        </a>
        <a href="http://youtube.com" class="youtube">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="30"
            height="30"
            viewBox="0 0 24 24"
            style=" fill:#000000;"
          >
            <path
              d="M21,5c0,0-3-1-9-1S3,5,3,5s-1,3-1,7s1,7,1,7s3,1,9,1s9-1,9-1s1-3,1-7S21,5,21,5z M10,15.464V8.536L16,12L10,15.464z"
            ></path>
          </svg>
        </a>
        <a href="http://instagram.com" class="instagram">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="25"
            height="25"
            viewBox="0 0 26 26"
            style=" fill:#000000;"
          >
            <path
              d="M 7.546875 0 C 3.390625 0 0 3.390625 0 7.546875 L 0 18.453125 C 0 22.609375 3.390625 26 7.546875 26 L 18.453125 26 C 22.609375 26 26 22.609375 26 18.453125 L 26 7.546875 C 26 3.390625 22.609375 0 18.453125 0 Z M 7.546875 2 L 18.453125 2 C 21.527344 2 24 4.46875 24 7.546875 L 24 18.453125 C 24 21.527344 21.53125 24 18.453125 24 L 7.546875 24 C 4.472656 24 2 21.53125 2 18.453125 L 2 7.546875 C 2 4.472656 4.46875 2 7.546875 2 Z M 20.5 4 C 19.671875 4 19 4.671875 19 5.5 C 19 6.328125 19.671875 7 20.5 7 C 21.328125 7 22 6.328125 22 5.5 C 22 4.671875 21.328125 4 20.5 4 Z M 13 6 C 9.144531 6 6 9.144531 6 13 C 6 16.855469 9.144531 20 13 20 C 16.855469 20 20 16.855469 20 13 C 20 9.144531 16.855469 6 13 6 Z M 13 8 C 15.773438 8 18 10.226563 18 13 C 18 15.773438 15.773438 18 13 18 C 10.226563 18 8 15.773438 8 13 C 8 10.226563 10.226563 8 13 8 Z"
            ></path>
          </svg>
        </a>
      </div>
    </footer>
    <script src="js/main.js"></script>
  </body>
</html> -->
<?php get_footer(); ?>