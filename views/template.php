<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="identifier-url" content="http://www.webaurelien.fr/projet4/">
        <link rel="shortcut icon" href="images/favicon.ico" type = "image/x-icon" />   
		<link rel="stylesheet" href="public/css/style.css">
		<title>Blog de Jean Forteroche</title>
    </head>
<body>


<header>
    <div class="container">
      <h1 class="logo"></h1>

      <nav>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="#bas">billets</a></li>
          <li><a href="views/viewLogin.php">Connexion</a></li>
        </ul>
      </nav>
    </div>
  </header>


<h1>Bienvenue sur le blog de Jean Forteroche</h1>



<div class="articleposition">
  <h2>Mes Derniers billets</h2>
<?= $content ?>
<a id="bas"></a>
</div>


</body>
</html>