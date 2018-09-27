
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <center>

    <form name="Codification" method="post">

<button><a href="bomadd.php">Ajouter</a></button><button><a href="bomexcel.php">Excel</a></button><button><a href="bomprint.php">Imprimer</a></button>

<br>

    <?php





      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
    try{

    $sql1 = "SELECT DISTINCT Codification FROM bom";
    $prepare = $bdd->prepare($sql1);
    $prepare->execute();
    //on stocke le résultat de la requête dans un array
    $arrListe = $prepare->fetchall();
    } catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
    }
    ?>
    <?php
    Error_reporting(0);
    // pour faire un menu déroulant présenter les différentes rubriques


    foreach($arrListe as $L) {
       $rbp = $L['Codification'];

    }

    $Codification= $_POST['Codification'];


    ?>

    </input>

    <br>

    </center>
    <?php


    if(!isset($Codification)){









    ?>



    <?php

    try
    {
       $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
       $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);


       // On recupere tout le contenu de la table news
    $reponse = $bdd->query("SELECT * FROM tournee ORDER BY Nom");

    // On affiche le resultat
    while ($donnees = $reponse->fetch())
    {
    ?>


    <?php
       //On affiche les données dans le tableau

    ?> echo "<p> $donnees[PDF] </p>";
       ?>
       <?php

   }
   $reponse->closeCursor();
   }
   catch(Exception $e)
   {
       die('Erreur : '.$e->getMessage());
   }



   		}

   ?>
