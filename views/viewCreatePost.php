<?php session_start() ?>
<?php ob_start() ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="identifier-url" content="http://www.webaurelien.fr/projet4/">
        <link rel="shortcut icon" href="../images/favicon.ico" type = "image/x-icon" />   
		<link rel="stylesheet" href="../style/style2.css">
        <script src="https://cdn.tiny.cloud/1/4n48ygl7rd6gd8hympzb7fmvbftukkwjxtn6n5306r6pycbe/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="../js/fr_FR.js"></script>
        <script>
        tinymce.init({
        selector: '#textarea',
        language :'fr_FR',
        });
        </script>
<header>
    <div class="container">
      <h1 class="logo"></h1>

      <nav>
        <ul>

          <li><a href="index.php">Accueil</a></li>
        </ul>
      </nav>
    </div>
  </header>


<h1>Bienvenue sur le blog de Jean Forteroche</h1>





  
  
  
  
  
  <form method="post" action="post&status=new" class="contact1-form validate-form">
      <span class="contact1-form-title">
        Ajouter un post
      </span>
        <input class="input1" type="text" name="title" placeholder="Titre de l'article">
        <textarea class="input1" name="content" placeholder="Contenu de l'article"></textarea>
        <button>
          <span>
            Créer l'article
          </span>
        </button>
    </form>
  </body>
</html>  