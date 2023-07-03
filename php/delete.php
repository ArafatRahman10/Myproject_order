<?php
    //script pour supprimer un utilisateur dans la bd
     $user = 'root';
     $pass = '';

     //ouverture d'une connexion à la BD e_card
    $dbc = new PDO ('mysql:host=localhost;dbname=e_card',$user,$pass);

    //preparation de la requete 
    $stmt = $dbc->prepare('DELETE FROM enrolement WHERE id=:num LIMIT 1');

    //liaison du paramétre nommé
    $stmt->bindValue(':num', $_GET['numEnrolement'], PDO::PARAM_INT);

    //exécution de la requete
    $executetIsOk =  $stmt->execute();

    if($executetIsOk){
        $message = 'Utilisateur a été supprimé';
    }
    else{
        $message = 'Echec de la suppression de utilisateur';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="shortcut icon" href ="../public/images/logo.png">
    <script src="../js/bootstrap.js"></script>
    <title>E.Card</title>
<body>
<div class="container">
        <div class="col-md-12">
            <div class="row">
                <h1 style="margin-top:5%;text-align:center;background-color:red;color:white;">Suppression</h1>
                <p style="color:#000;"><?= $message ?></p> 
               
            </div>    
        </div>
    </div>    
</body>

</html>