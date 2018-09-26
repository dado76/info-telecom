
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <center>

    <form name="Codification" method="post">

<button><a href="Immatriculationadd.php">Ajouter</a></button><button><a href="Immatriculationadd.php">Excel</a></button><button><a href="Immatriculationadd.php">Imprimer</a></button>

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

      <center><table>

      <table id="customers">
    <tr>
    <th>Codification </th>
    <th>Immatriculation</th>
    <th>Secteur</th>
    <th>Cubage</th>
    <th>PTAC</th>
    <th>PV</th>
    <th>Modifier</th>
     <th>Supprimer</th>
      <th>Voir</th>
     </tr>

    <?php

    try
    {
       $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
       $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);


       // On recupere tout le contenu de la table news
    $reponse = $bdd->query("SELECT * FROM bom ORDER BY Codification");

    // On affiche le resultat
    while ($donnees = $reponse->fetch())
    {
    ?>


    <tr class="newspaper-b">
    <?php
       //On affiche les données dans le tableau

       echo "<td> $donnees[Codification] </td>";
       echo "<td> $donnees[Immatriculation] </td>";
     echo "<td> $donnees[Secteur] </td>";
     echo "<td> $donnees[Cubage] </td>";
     echo "<td> $donnees[PTAC] </td>";
     echo "<td> $donnees[PV] </td>";
     ?>
  	<td align="center"><a href="Codificationedit.php?id=<?php echo $donnees["Codification"]; ?>">
  	<i class="fa fa-eyedropper" style="color:black;></i><img src"logo.jpg" border="0" text-color="black"></a></td>


  	<td align="center"><a href="Codificcationtiondel.php?id=<?php echo $donnees["Codification"]; ?>">
  	<i class="fa fa-trash" style="color:black;></i><img src"logo.jpg" border="0" text-color="black"></a></td>


       <td align="center"><a href="Codificationnview.php?id=<?php echo $donnees["Codification"]; ?>">
       <i class="fa fa-eye" style="color:black;></i><img src"logo.jpg" border="0" text-color="black"></a></td>

  	</tr>

     <?php

    }
    $reponse->closeCursor();
    }
    catch(Exception $e)
    {
       die('Erreur : '.$e->getMessage());
    }
    ?>

    </table>

    </class>
    <?php


}
    elseif  ($Codification=="TOUS") {
      ?>

           <center><table>

           <table id="customers">
             <tr>
             <th>Codification </th>
             <th>Immatriculation</th>
             <th>Secteur</th>
             <th>Cubage</th>
             <th>PTAC</th>
             <th>PV</th>
             <th>Modifier</th>
              <th>Supprimer</th>
               <th>Voir</th>
              </tr>
        </tr>

       <?php


      try
      {
          $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
          $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);


          // On recupere tout le contenu de la table news
      $reponse = $bdd->query('SELECT * FROM bom ORDER BY Codification');

      // On affiche le resultat
      while ($donnees = $reponse->fetch())
      {
      ?>
        <?php
          //On affiche les données dans le tableau
          echo "<td> $donnees[Codification] </td>";
          echo "<td> $donnees[Immatriculation] </td>";
        echo "<td> $donnees[Secteur] </td>";
        echo "<td> $donnees[Cubage] </td>";
        echo "<td> $donnees[PTAC] </td>";
        echo "<td> $donnees[PV] </td>";
      	?>
  	<td align="center"><a href="Immatriculationedit.php?id=<?php echo $donnees["Codification"]; ?>">
  	<i class="fa fa-eyedropper" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>


  	<td align="center"><a href="Immatriculationdel.php?id=<?php echo $donnees["Codification"]; ?>">
  	<i class="fa fa-trash" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>


       <td align="center"><a href="Immatriculationview.php?id=<?php echo $donnees["Codification"]; ?>">
       <i class="fa fa-eye" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>

  	</tr>




      		<?php

      }
      $reponse->closeCursor();
      }
      catch(Exception $e)
      {
          die('Erreur : '.$e->getMessage());
      }






      ?>
      	</table>

<?php
	}
	else

		{
		  ?>

     <center><table>

     <table id="customers">

       <tr>
       <th>Codification </th>
       <th>Immatriculation</th>
       <th>Secteur</th>
       <th>Cubage</th>
       <th>PTAC</th>
       <th>PV</th>
       <th>Modifier</th>
        <th>Supprimer</th>
         <th>Voir</th>
        </tr>

    </tr>

   <?php


  try
  {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);


      // On recupere tout le contenu de la table news
  $reponse = $bdd->query( "SELECT * FROM bom WHERE Codification='$Codification'" );

  // On affiche le resultat
  while ($donnees = $reponse->fetch())
  {
  ?>
    <?php
      //On affiche les données dans le tableau

      echo "<td> $donnees[Codification] </td>";
      echo "<td> $donnees[Immatriculation] </td>";
    echo "<td> $donnees[Secteur] </td>";
    echo "<td> $donnees[Cubage] </td>";
    echo "<td> $donnees[PTAC] </td>";
    echo "<td> $donnees[PV] </td>";
  	?>
  	<td align="center"><a href="Immatriculationedit.php?id=<?php echo $donnees["Codification"]; ?>">
  	<i class="fa fa-eyedropper" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>


  	<td align="center"><a href="Immatriculationdel.php?id=<?php echo $donnees["Codification"]; ?>">
  	<i class="fa fa-trash" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>


       <td align="center"><a href="Immatriculationview.php?id=<?php echo $donnees["Codification"]; ?>">
       <i class="fa fa-eye" style="color:#2E64FE;></i><img src"logo.jpg" border="0" text-color="white"></a></td>

  	</tr>



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
  	</table>
