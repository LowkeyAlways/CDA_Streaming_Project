<?php 
session_start();
include './config/db_conn.php';

$loggedInUser = isset($_SESSION['name']) ? $_SESSION['name'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Live Streaming</title>
  <link rel="stylesheet" href="./public/css/reset.css" />
  <link rel="stylesheet" href="./public/css/main1.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./public/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./public/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./public/favicon/favicon-16x16.png" />
  <link rel="manifest" href="./public/favicon/site.webmanifest" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <nav>
      <ul class="first-ul">
        <li>
          <a href="#"><img class="logo" src="./public/asset/logo.png" alt="" /></a>
        </li>
        <li><a href="index.php?action=" class="nav-link">Accueil</a></li>
        <li><a href="index.php?action=nosfilms" class="nav-link">Nos films</a></li>
      </ul>
      <ul class="second-ul">
      <?php if ($loggedInUser) : ?>
          <li><span class="nav-link connected">Bonjour, <?php echo $loggedInUser; ?></span></li>
        <?php else : ?>
          <li><a href="index.php?action=login" class="nav-link">Se connecter</a></li>
          <li><a href="index.php?action=register" class="nav-link">S'inscrire</a></li>
        <?php endif; ?>
        <li class="nav_btns"><i class="fa-solid fa-moon change-theme" tabindex=0 aria-hidden="true" id="theme-button"></i></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="title">
      <img class="logo" src="./public/asset/logo.png" alt="" />
      <h1>Films d’horreur, thriller et bien plus en illimité</h1>
    </div>
    <div class="secondary-title">
      <ul>
        <li>
          <h2>Regarder en illimité sur votre TV</h2>
        </li>
        <li>
          <p>Regardez en illimité sur votre Smartphone, Xbox, Tablet</p>
        </li>
      </ul>
      <ul class="device">
        <li><img src="./public/asset/TV.png" alt="Television" /></li>
        <li><img src="./public/asset/Tablet.png" alt="Tablet" /></li>
        <li><img src="./public/asset/xbox.png" alt="Xbox" /></li>
        <li><img src="./public/asset/smartphone.png" alt="Smartphone" /></li>
      </ul>
    </div>
    <div class="location">
      <h3>Faites votre choix par thème : </h3>
      <form class="form_loc" action="" method="post">
        <select name="genre" id="genre">
          <option value="Horreur">Horreur</option>
          <option value="Thriller">Thriller</option>
          <option value="Science-fiction">Science-fiction</option>
          <option value="Fantastique">Fantastique</option>
          <option value="Action">Action</option>
          <option value="Comédie">Comédie</option>
          <option value="Drame">Drame</option>
          <option value="Animation">Animation</option>
          <option value="Aventure">Aventure</option>
          <option value="Policier">Policier</option>
          <option value="Guerre">Guerre</option>
          <option value="Historique">Historique</option>
          <option value="Romance">Romance</option>
          <option value="Musical">Musical</option>
          <option value="Documentaire">Documentaire</option>
          <option value="Biopic">Biopic</option>
          <option value="Western">Western</option>
          <option value="Epouvante">Epouvante</option>
          <option value="Famille">Famille</option>
          <option value="Autre">Autre</option>
        </select>
      </form>
    </div>
    <div class="movie-list">
      <ul>
        <li>
          <img class="movie-img2" src="./public/asset/movies/django.jpg" alt="Django">
          <p>Django</p>
          <button>Plus d'infos...</button>
        </li>
        <li>
          <img class="movie-img2" src="./public/asset/movies/batman.jpg" alt="Batman">
          <p>Batman</p>
          <button>Plus d'infos...</button>
        </li>
        <li>
          <img class="movie-img2" src="./public/asset/movies/wandavision.png" alt="Wanda">
          <p>Wanda Vision</p>
          <button>Plus d'infos...</button>
        </li>
      </ul>
    </div>
  </main>
  <footer>
    <p></p>
  </footer>
  <script src="./public/js/app.js"></script>
  <script src="./public/js/date.js"></script>
</body>

</html>