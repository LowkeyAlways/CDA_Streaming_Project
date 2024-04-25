<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Live Streaming</title>
    <link rel="stylesheet" href="./public/css/reset.css" />
    <link rel="stylesheet" href="./public/css/main.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="./public/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./public/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./public/favicon/favicon-16x16.png">
<link rel="manifest" href="./public/favicon/site.webmanifest">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <header>
      <nav>
        <ul class="first-ul">
          <li>
            <a href="#"><img class="logo" src="./public/asset/logo.png" alt="" /></a>
          </li>
          <li><a href="#" class="nav-link">Accueil</a></li>
          <li><a href="index.php?action=nosfilms" class="nav-link">Nos films</a></li>
        </ul>
        <ul class="second-ul">
          <li><a href="index.php?action=login" class="nav-link">Se connecter</a></li>
          <li><a href="index.php?action=register" class="nav-link">S'inscrire</a></li>
          <li class="nav_btns"><i class="fa-solid fa-moon change-theme" tabindex=0 aria-hidden="true" id="theme-button"></i></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="title">
        <img class="logo" src="./public/asset/logo.png" alt="" />
        <h1>Films d’horreur, thriller et bien plus en illimité</h1>
      </div>
      <div class="secondary-t">
        <h3>
          Prêt à regarder ? Saisissez votre adresse mail pour vous abonner.
          <br />
          Le tout à 5,99 €
        </h3>
      </div>
      <div class="content">
        <input type="text" placeholder="Adresse mail" />
        <button>Commencer</button>
      </div>
      <div class="content-2">
        <p>Tous les mois profitez de toutes les nouveautés cinéma. A partir du mois prochain on vous propose tous les classiques du cinéma d'horreur ou thriller. Où que vous soyez. Tous les films en VO, VOST, VF et plus d'options.</p>
      </div>
    </main>
    <footer>
      <p></p>
    </footer>
    <script src="./public/js/app.js"></script>
    <script src="./public/js/date.js"></script>
  </body>
</html>
