
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
    <div class="box c">
<center>
  <div id="test">

<?php

try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ajouter sims</title>
<link rel="stylesheet" href="fiche.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>


<div class="form-style-10">
 <div class="section">
   <div class="inner-wrap">
<h1> AJOUTER </h1>
<form  method="post" action="">



<label>Codification</label>
<input type="text" name="Codification" placeholder="Enter Name" required value="" />

<label>Immatriculation</label>
<input type="text" name="immatriculation" placeholder="Immatriculation" required value="" />
<br>
<br>
<label>Chassis_equip</label>
<input type="text" name="Chassis_equip" placeholder="Chassis" required value="" />

<label>Secteur</label>
<input type="text" name="Secteur" placeholder="Secteur" required value="" />
<br>
<br>
<label>Cubage</label>
<input type="text" name="Cubage" placeholder="Cubage" required value="" />

<label>Immatriculation</label>
<input type="text" name="Type_benne" placeholder="Type_benne" required value="" />
<br>
<br>
<label>Numéro de benne</label>
<input type="text" name="Num_benne" placeholder="Num_benne" required value="" />

<label>Chassis</label>
<input type="text" name="Chassis" placeholder="Chassis" required value="" />
<br>
<br>
<label>MEC</label>
<input type="text" name="MEC" placeholder="MEC" required value="" />

<label>BOM_remplacer</label>
<input type="text" name="BOM_remplacer" placeholder="BOM_remplacer" required value="" />
<br>
<br>
<label>PTAC</label>
<input type="text" name="PTAC" placeholder="PTAC" required value="" />

<label>PV</label>
<input type="text" name="PV" placeholder="PV" required value="" />
<br>
<br>
<label>PV</label>
<input type="text" name="PV" placeholder="PV" required value="" />

<label>CU</label>
<input type="text" name="CU" placeholder="CU" required value="" />
<br>
<br>
<label>CU_reel</label>
<input type="text" name="CU_reel" placeholder="CU_reel" required value="" />

<label>Empattement</label>
<input type="text" name="Empattement" placeholder="Empattement" required value="" />
<br>
<br>
<label>LONGEUR</label>
<input type="text" name="LONGEUR" placeholder="LONGEUR" required value="" />

<label>longu</label>
<input type="text" name="LONGEUR" placeholder="longu" required value="" />
<br>
<br>
<label>larg_retro</label>
<input type="text" name="larg_retro" placeholder="larg_retro" required value="" />
<br>
<br>
<label>haut_ech</label>
<input type="text" name="haut_ech" placeholder="haut_ech" required value="" />
<br>
<br>
<label>Type</label>
<input type="text" name="Type" placeholder="Type" required value="" />
<br>
<br>
<label>N_BASC</label>
<input type="text" name="N_BASC" placeholder="N_BASC" required value="" />
<br>
<br>
<label>marque_LC</label>
<input type="text" name="marque_LC" placeholder="marque_LC" required value="" />
<br>
<br>
<br>

<center><input name="submit" type="submit" value="Modifier" /></center>

<?php


}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>

<?php

if(isset($_POST['submit'])) // Si on clique sur S'inscrire
    {

$Codification=$_REQUEST['Codification'];
$sim =$_REQUEST['sim'];
$balise =$_REQUEST['balise'];
$telephone =$_REQUEST['telephone'];
$IDPORT =$_REQUEST['IDPORT'];
$immatriculation =$_REQUEST['immatriculation'];
$statut =$_REQUEST['statut'];
$probleme =$_REQUEST['probleme'];
$navigation =$_REQUEST['navigation'];
$LC =$_REQUEST['LC'];
$pesee =$_REQUEST['pesee'];




   $update="insert into carte_sims set Codification = '$Codification', sim='$sim', balise='$balise', telephone='$telephone', IDPORT='$IDPORT', immatriculation='$immatriculation', statut='$statut',
probleme='$probleme', navigation='$navigation', LC='$LC', pesee='$pesee'";

    // Prepare statement
    $stmt = $bdd->prepare($update);

    // execute the query
    $stmt->execute();
$status= 'carte sims ajouter';
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . '<p style="color:#04B431;">'.$status.'</p>';
header("Refresh: 6;url=sim.php");


}

?>
</center>
</div>
</div>
