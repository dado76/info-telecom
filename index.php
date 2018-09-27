
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

      <!DOCTYPE html>
        <?php
        require('db.php');
        include("auth.php");
         ?>


  <div id="test">
             <h1>Balise<span></span></h1>
             <form>

                              <?php
                              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                              $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
                         $sql = "SELECT * FROM carte_sims";
                         $req = $bdd->prepare($sql);
                         $req->execute();
                         $array = $req->fetchALL();
                         $nb = count($array);
                         ?>
                         <?php
                         $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                         $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
                    $sql1 = "SELECT * FROM carte_sims WHERE statut='EN SERVICE'";
                    $req1 = $bdd->prepare($sql1);
                    $req1->execute();
                    $array1 = $req1->fetchALL();
                    $nb1 = count($array1);
                    ?>
                    <?php
                    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                    $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
               $sql2 = "SELECT * FROM carte_sims WHERE LC='TERBERG'";
               $req2 = $bdd->prepare($sql1);
               $req2->execute();
               $array2 = $req2->fetchALL();
               $nb2 = count($array2);
               ?>
               <br>
      <td> Nombre de balise : <td> <?php  echo $nb; ?>
        <br>
      <td> En fonction  : <td><?php  echo $nb1; ?>
        <br>
      <td> Equipé RFID : <td> <?php  echo $nb2; ?>
        <br>
        <br>
                <button><a href="sim.php">Voir</a></button>


      </div>
  <div id="test">
      <h1>Radio<span></span></h1>
      <form>

          <div class="inner-wrap">
            <?php
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
       $sql3 = "SELECT * FROM radio ";
       $req3 = $bdd->prepare($sql3);
       $req3->execute();
       $array3 = $req3->fetchALL();
       $nb3 = count($array3);
       ?>

      <td> Nombre de radio :  <td>  <span><?php  echo $nb3; ?></span>
      <?php
        $sql4 = "SELECT * FROM radio ";
        $req4 = $bdd->prepare($sql4);
        $req4->execute();
        $array4 = $req4->fetchALL();
        $nb4 = count($array4);
        ?>

        <br>
      <td> En fonction  : <td>
        <br>
      <td> En stock :  <td>
        <br>
        <br>
      <button><a href="radio.php">Voir</a></button>

      </div>
      </div>
  <div id="test">
      <h1>Bom<span></span></h1>
      <form>


      <td> Nombre de bom : <td>
        <br>
      <td> Utilisant une pesée  : <td>
        <br>
      <td> Utilisant RFID : <td>
        <br>
        <button><a href="bom.php">Voir</a></button>

      </div>
  <div id="test">
      <h1>Tournée de référence<span></span></h1>
      <form>

          <div class="inner-wrap">

      <td> Nombre de tournée : <td>
        <br>
      <td> Nombre de tournée CS : <td>
        <br>
      <td> Nombre de tournée OM : <td>
        <br>
        <br>
        <button><a href="plan.php">Voir</a></button>
<br>
<br>
      </div>
      </div>
             </center>
      </main>
      <aside>
        <div class="form-style-user">
          <center>

      </center>
        <form>
<br>
<br>



      </div>
           </aside>
      </div>
        </body>
      </center>
      </html>
  </div>
