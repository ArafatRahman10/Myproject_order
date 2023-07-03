<?php
     $user = 'root';
     $pass = '';

     //ouverture d'une connexion à la BD e_card
    $dbc = new PDO ('mysql:host=localhost;dbname=e_card',$user,$pass);

    //preparation de la requete 
    $stmt = $dbc->prepare('SELECT * FROM enrolement');

    //exécution de la requete
    $insertIsOk =  $stmt->execute();

    //récupération des résultats en une seule fois
    $enrolements = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="shortcut icon" href ="../public/images/logo.png">
    <script src="../js/bootstrap.js"></script>
    <title>E.Card</title>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
          <div class="row">
                <h1 style="color:black;margin-top:35px;text-decoration:underline";>Liste des enregistrés</h1>

                <ul style="font-size:130%">

                <?php foreach($enrolements as $enrolement):?>

                    <li>
                        <?= $enrolement['poste_identification'] ?>-
                        <?= $enrolement['email'] ?>-
                        <?= $enrolement['telephone'] ?>-
                        <?= $enrolement['nom_citoyen'] ?>-
                        <?= $enrolement['prenom_citoyen'] ?>-
                        <?= $enrolement['sexe'] ?>-
                        <?= $enrolement['profession_citoyen'] ?>-
                        <?= $enrolement['date_naissance'] ?>-
                        <?= $enrolement['lieu_naissance'] ?>-
                        <?= $enrolement['departement'] ?>-
                        <?= $enrolement['teint'] ?>-
                        <?= $enrolement['taille'] ?>-
                        <?= $enrolement['groupe_ethnique'] ?>-
                        <?= $enrolement['nom_pere'] ?>-
                        <?= $enrolement['profession_pere'] ?>-
                        <?= $enrolement['nom_mere'] ?>-
                        <?= $enrolement['profession_mere'] ?>-
                        <?= $enrolement['image_citoyen'] ?>-
                        <?= $enrolement['image_certificat_nationalite'] ?>-
                        <?= $enrolement['image_acte_naissance'] ?>
                        <?= $enrolement['date_enregistrement'] ?>


                    </li>

                <?php endforeach; ?>    
                </ul>
            </div>    
        </div>
    </div>    

</body>
</html>