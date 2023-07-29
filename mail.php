<?php

$to ='opakowania.lomianki@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = 'Nowy mail od'. $name . '('. $email . ')';
$message = $_POST['message'];
$headers = 'From:' . $name . '('. $email . ')';
$headers .= 'Content-Type: text/plain; charset=utf-8' . "\r\n";


mail($to, $subject, $message, $headers);

?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zakład Opakowań Tekturowych Bogdan Kamiński</title>
    <meta
      name="description"
      content="Zakład produkujacy opakowania w Łomiankach. Skontaktuj się z nami! Pomożemy Tobie dobrać odpowiedni produkt. Robimy opakowania, kartony na każdy wymiar."
    />
    <meta name="author" content="Jacek,chętnie podejmę pracę, 505739881" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="canonical"
      href="https://www.zakladopakowanlomianki.pl/kontakt.html"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;0,900;1,400&display=swap"
      rel="stylesheet"
    />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
  </head>
  <body>
    <header class="top">
      <div class="top-container">
        <div class="logo">
          <a href="index.html">
            <img
              class="logo-png"
              src="images/logo-biale-ZOT.png"
              alt="logo zakładu
          Opakowań Tekturowych Bogdan Kamiński"
              width="150"
              height="100"
          /></a>
        </div>
        <div class="contact">
          <address>
            <ul class="contact-staff">
              <li>Zakład Opakowań Tekturowych Bogdan Kamiński</li>
              <li>ul. Rolnicza 66D, 05-092 Łomianki</li>
              <li><a href="tel:227511370">Telefon:22 751 13 70</a></li>
              <li>
                <a href="mailto:opakowania.lomianki@gmail.com"
                  >e-mail: opakowania.lomianki@gmail.com</a
                >
              </li>
            </ul>
          </address>
        </div>
      </div>

      <nav class="menu-navi">
        <div class="header_burger-menu">
          <div class="header__navigation-hamburger">
            <button
              type="button"
              title="menu-open-button"
              class="header__mobile-btn"
            >
              <svg class="header__navigation-icon" width="48" height="48">
                <use href="./images/icons.svg#icon-menu"></use>
              </svg>
            </button>

            <div class="header__menu-mobile d-none">
              <ul class="header__mobile-list">
                <li class="header__list-item">
                  <a class="header__link" href="index.html">O NAS</a>
                </li>
                <li class="header__list-item">
                  <a class="header__link" href="oferta.html">OFERTA</a>
                </li>
                <li class="header__list-item">
                  <a class="header__link" href="aktualnosci.html"
                    >AKTUALNOŚCI</a
                  >
                </li>
                <li class="header__list-item">
                  <a class="header__link" href="kontakt.html">KONTAKT</a>
                </li>
              </ul>

              <button
                type="button"
                title="menu-exit-button"
                class="header__exit-btn"
              >
                <svg width="48" height="48" class="header__exit">
                  <use
                    class="page-header__exit-icon"
                    href="./images/icons.svg#icon-x-symbol-svgrepo-com"
                  ></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="container-navi">
          <ul class="menu-list">
            <li>
              <a href="index.html">
                <div class="menu-one">
                  <span class="link">O NAS</span>
                </div></a
              >
            </li>
            <li>
              <a href="oferta.html">
                <div class="menu-two">
                  <span class="link">OFERTA</span>
                </div></a
              >
            </li>
            <li>
              <a href="aktualnosci.html">
                <div class="menu-three">
                  <span class="link">AKTUALNOŚCI</span>
                </div></a
              >
            </li>
            <li>
              <a href="kontakt.html">
                <div class="menu-four">
                  <span class="link">KONTAKT</span>
                </div></a
              >
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="middle">
     <p class="text reveal">Dziękujemy, Twoja wiadomość została wysłana. Skontaktujemy sie z Tobą możliwie najszybciej.</p>
    </main>
    <footer class="end-site">
      <address class="thumb">
        <div class="mail">
          <img
            src="images/mail.png"
            alt="znacznik pinezki"
            width="60"
            height="60"
          />

          <p class="footer-paragraph">
            <a href="mailto:opakowania.lomianki@gmail.com">
              opakowania.lomianki@gmail.com
            </a>
          </p>
        </div>
        <div class="phone">
          <img
            src="images/telefon.png"
            alt="znacznik słuchawki od telefonu"
            width="60"
            height="60"
          />

          <p class="footer-paragraph">
            <a href="tel:+48227511370">22 751 13 70</a>
          </p>
        </div>
        <div class="localization">
          <img
            src="images/lokalizacja.png"
            alt="znacznik, pinezka lokalizacji"
            width="60"
            height="60"
          />

          <div class="footer-list">
            <ul>
              <li>Zakład Opakowań Tekturowych Bogdan Kamiński</li>
              <li>Ul. Rolnicza 66D, 05-092 Łomianki</li>
              <li>NIP: 1180136344</li>
            </ul>
          </div>
        </div>
      </address>
    </footer>
    <div class="copyright">
      <p class="paragraph-copy">&#169;2022-2023</p>
      <a class="legal-link" href="politykaprywatnosci.html"
        >Polityka Prywatności</a
      >
    </div>
    <script src="./js/script.js"></script>
  </body>
</html>