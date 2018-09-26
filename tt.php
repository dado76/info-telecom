<P> Nom d'utilisateur : <p>     <?php

echo $_SESSION["username"];
$user=$_SESSION["username"];
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);


// On recupere tout le contenu de la table news
$reponse = $bdd->query( "SELECT * FROM users WHERE username='$user'" );

// On affiche le resultat
while ($donnees = $reponse->fetch())
{
?>
<?php

}
$reponse->closeCursor();
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>





<table>
   <tr>
       <th>Nom</th>
       <th>Date de création</th>
       <th>Droit</th>
        <th>Email</th>
   </tr>

   <tr>
       <td></td>
       <td><?php
       echo "<td> $donnees[trn_date] </td>";

       ?></td>
       <td><?php
       echo $donnees['rank'];
       ?>  <br><?php
       if ($donnees['rank']=="0")
       echo "utilisateur" ;
       else
       echo  "vous éte admin";
       ?></td>
   </tr>
   <tr>
       <td>Michelle</td>
       <td>26 ans</td>
       <td>États-Unis</td>
   </tr>
</table>

<?php


$reponse->closeCursor();
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>
