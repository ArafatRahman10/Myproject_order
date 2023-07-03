<?php
     $user = 'root';
     $pass = '';

    $dbc = new PDO ('mysql:host=localhost;dbname=e_card',$user,$pass);
    $date = date("Y-m-d H:i:s");

    $stmt = $dbc->prepare("INSERT INTO `enrolement`(`id`, `poste_identification`, `email`, `telephone`, 
    `nom_citoyen`, `prenom_citoyen`, `sexe`, `profession_citoyen`, `date_naissance`, `lieu_naissance`, 
    `departement`,  `teint`, `taille`, `groupe_ethnique`, `nom_pere`, `profession_pere`, `nom_mere`, 
    `profession_mere`, `image_citoyen`, `image_certificat_nationalite`,`image_acte_naissance`, `date_enregistrement`)
    VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $stmt->bindParam(1, $_POST['poste_identification']);
    $stmt->bindParam(2, $_POST['email']);
    $stmt->bindParam(3, $_POST['telephone']);
    $stmt->bindParam(4, $_POST['nom_citoyen']);
    $stmt->bindParam(5, $_POST['prenom_citoyen']);
    $stmt->bindParam(6, $_POST['sexe']);
    $stmt->bindParam(7, $_POST['profession_citoyen']);
    $stmt->bindParam(8, $_POST['date_naissance']);
    $stmt->bindParam(9, $_POST['lieu_naissance']);
    $stmt->bindParam(10, $_POST['departement']);
    $stmt->bindParam(11, $_POST['teint']);
    $stmt->bindParam(12, $_POST['taille']);
    $stmt->bindParam(13, $_POST['groupe_ethnique']);
    $stmt->bindParam(14, $_POST['nom_pere']);
    $stmt->bindParam(15, $_POST['profession_pere']);
    $stmt->bindParam(16, $_POST['nom_mere']);
    $stmt->bindParam(17, $_POST['profession_mere']);
    $stmt->bindParam(18, $_POST['image_citoyen']);
    $stmt->bindParam(19, $_POST['image_certificat_nationalite']);
    $stmt->bindParam(20, $_POST['image_acte_naissance']);
    $stmt->bindParam(21, $date);
    
    $insertIsOk =  $stmt->execute();

    if($insertIsOk) {
        $message = 'informations enregistrées avec succèss!!!';
      }
      else{
        $message = 'echec d\enregistrement';
      }

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href ="../public/images/logo.png">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <title>E.CARD</title>
  </head>
  <style>
    button{
      text-decoration:none;
      background-color:red;
      height: 50px;
      cursor:pointer;
      margin-top:15px;
    }
    button > a{
      text-decoration:none;
      color:white;
      font-weigth:bolder;
     
    }
    h1{
      color: #000;
      margin-top:35px;
    }
  </style>
 
  <body>
    <div class="container"> 
      <div class="row">
        <div class="col-md-12">
          <h1> <?php echo $message; ?></h1>
          <button>  
          <a href="afficher.php"> VOIR DETAILS D'ENREGISTREMENT</a>
          </button>
        </div>
      </div>
    </div>

    
    <?php 
      //Script d'envoi du message de confirmation à l'utilisateur

     /* rand(1000000,9000000);

      $basic  = new \Vonage\Client\Credentials\Basic("9f9144b9", "wx2w4Q9VH0INjNn2");
      $client = new \Vonage\Client($basic);

      $response = $client->sms()->send(
      new \Vonage\SMS\Message\SMS("237657321261", BRAND_NAME, 'A text message sent using the Nexmo SMS API')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
      }*/

    ?>   
    
    
  </body>
</html>