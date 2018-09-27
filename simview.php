
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
  <div class="box c">  <div id="test">
	  <?php

	  try
	  {
	      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	      $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
	  $Codification=$_REQUEST['id'];


	  $request= $bdd->prepare('SELECT * FROM carte_sims WHERE Codification = :Codification');
	  $response = $request->execute(array('Codification' => $Codification));

	  $donnees = $request->fetch();
	  ?>

	<div class="form-style-10">
	 <div class="section">
	   <div class="inner-wrap">






	    <form  method="post" action="">




	      <center><h1>Gestion des cartes sims</h1> <center>






	    <label>Codification :</label>
	    <?php echo $donnees['Codification'];?>
	    <br>
	    <label>Carte sims :</label>
	    <?php echo $donnees['sim'];?>
	    <br>
	    <label>Balise</label>
	    <?php echo $donnees['balise'];?>
	    <br>
	    <label>Téléphone</label>
	    <?php echo $donnees['telephone'];?>
	    <br>



	    <label>ID et Port</label>
	    <?php echo $donnees['IDPORT'];?>
	    <br>
	    <label>Immatriculation</label>
	    <?php echo $donnees['immatriculation'];?>
	    <br>
	    <label>Statut</label>
	    <?php echo $donnees['statut'];?>
	    <br>
	    <br>
	    <br>
	  <a href="sim.php"<i class="fa fa-home" style="color:white"><font color="white">Retour</a>


	  </div>

	</div>

	</body>

	</html>

	<?php

	$request->closeCursor();
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
	?>
</div>

</div>
