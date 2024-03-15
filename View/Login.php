<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Live Streaming</title>
  <link rel="stylesheet" href="../css/reset.css" />
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png" />
  <link rel="manifest" href="../favicon/site.webmanifest" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <nav>
      <ul class="first-ul">
        <li>
          <a href="#"><img class="logo" src="../asset/logo.png" alt="" /></a>
        </li>
        <li><a href="../index.html" class="nav-link">Accueil</a></li>
        <li><a href="./NosFilms.php" class="nav-link">Nos films</a></li>
      </ul>
      <ul class="second-ul">
        <li><a href="#" class="nav-link">Se connecter</a></li>
        <li><a href="./Subscribe.php" class="nav-link">S'inscrire</a></li>
        <li class="nav_btns"><i class="fa-solid fa-moon change-theme" tabindex=0 aria-hidden="true"
            id="theme-button"></i></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="title">
      <img class="logo" src="../asset/logo.png" alt="" />
      <h1>Films d’horreur, thriller et bien plus en illimité</h1>
    </div>
    <div class="content-2">
      <p>
        Tous les mois profitez de toutes les nouveautés cinéma. A partir du
        mois prochain on vous propose tous les classiques du cinéma d'horreur
        ou thriller. Où que vous soyez. Tous les films en VO, VOST, VF et plus
        d'options.
      </p>
    </div>
    <div class="forms">
      <legend>Connectez vous</legend>
      <fieldset class="login">
        <form action="" method="post">
          <label for="email">E-mail</label><br />
          <input type="email" id="email" name="mail" placeholder="E-mail" aria-required="true" required /><br />

          <label for="email">Mot de passe</label><br />
          <input type="password" id="password" name="psw" placeholder="Password" aria-required="true" required />
          <div class="button">
            <input type="submit" name="submit" value="Valider" />
          </div>
        </form>
      </fieldset>
    </div>
  </main>
  <footer>
    <p></p>
  </footer>
  <script src="../js/app.js"></script>
  <script src="../js/date.js"></script>
</body>

</html>