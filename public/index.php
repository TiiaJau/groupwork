<!DOCTYPE html>
<html lang="fi">
<html>
  <head>
    <meta charset="UTF-8">
    <title>Siru's Hairsaloon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/styles/tyylit.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <div class='header-logo-container'><div class='header-logo'>Siru'sHairsaloon</div>
    <div class='main-container'>
    <?php include_once('../src/components/nav.php');?>
    </div>  
    </div>
      <div class='nav-container'>
        <header>
          <div class='header-logo-left-corner'></div>
          <nav>
            <ul>
              <li><a href="?sivu=etusivu">Etusivu</a></li>
              <li><a href="?sivu=yhteystiedot">Yhteystiedot</a></li>
              <li><a href="?sivu=palvelut">Palvelumme</a></li>
              <li><a href="?sivu=hinnasto">Hinnasto</a></li>
              <li><a href="?sivu=meista">Meistä</a></li>
            </ul>
          </nav>
        </header>
        <div class='nav-mid-line'></div>
        <footer>
          <p class='footer-text'>Siru's Hairsaloon
            Kuviteltukatu 1
            00100 Helsinki
            +358501234567
            info@sirushairsaloon.fi
          </p>
          <div class='nav-horizontal-line'></div>
          <div class='nav-icons-container'>
            <img class='insta' src='../public/images/instagram.png'  title="Siru's Hairsaloon instagram">
            <div class='nav-vertical-line'></div>
            <img class='twitter' src='../public/images/twitter.png'  title="Siru's Hairsaloon twitter">
          </div>
          <div class='copyright'>
            <p>&copy; Kurpitsa Solutions 2023</p>
          </div>
        </footer>
      </div>
  </body>
</html>