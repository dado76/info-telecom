
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>


  <div class="wrapper">
    <div class="box a"><?php include("entete.php")?></div>
    <div class="box b"><?php include("logo.php")?></div>
    <div class="box c"><!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
<form enctype="multipart/form-data" action="traitement.php" method="post">
  <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
  <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
  <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
  Envoyez ce fichier : <input name="userfile" type="file" />
  <input type="submit" value="Envoyer le fichier" />
</form></div>


  </div>
