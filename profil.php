  <center> <table id="customers">
<table>

  <th>Nom d'utilisateur</th>
  <th>Email</th>
  <th>Date de création</th>
  <th>Niveau d'utilisateur</th>

<tr>

<?php $user=$_SESSION["username"];
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
$reponse = $bdd->query( "SELECT * FROM users WHERE username='$user'" );
while ($donnees = $reponse->fetch()){
  ?>
  <td><?php echo $user?></td>
  <td><?php echo $donnees['email'];?>  </td>
  <td><?php echo $donnees['trn_date'];?></td>
 <td><?php echo $donnees['rank']; ?></td><br><?php if ($donnees['rank']=="0") echo "utilisateur" ; else echo  "Administrateur";?>
  <td><?php }$reponse->closeCursor();} catch(Exception $e) { die('Erreur : '.$e->getMessage());} ?></td>


</tr>
</table>

<div class="topnav" id="myTopnav">

  <a href="logout.php"><i class="material-icons">clear</i><br>logout</a>
</a></center>
</div>
