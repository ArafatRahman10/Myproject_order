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
 
 


 <?php
    // Script pour la gestion des image 
    /*require 'insertion.php';
    if($_FILES["image_citoyen"]["error"] === 4){
       echo
       "<script> alert('Image Does Not Exist'); </script>";
    } 
    if($_FILES["image_certificat_nationalite"]["error"] === 4){
        echo
        "<script> alert('Image Does Not Exist'); </script>";
    }   
   if($_FILES["image_acte_naissance"]["error"] === 4){
        echo
        "<script> alert('Image Does Not Exist'); </script>";
    }  
    else{
        $fileName = $_FILES["image_citoyen"];
        $fileName = $_FILES["image_certificat_nationalite"];
        $fileName = $_FILES["image_acte_naissance"];

        $fileSize = $_FILES["image_citoyen"]["size"];
        $fileSize = $_FILES["image_certificat_nationalite"]["size"];
        $fileSize = $_FILES["image_acte_naissance"]["size"];

        $tmpName = $_FILES["image_citoyen"]["tmp_name"];
        $tmpName = $_FILES["image_certificat_nationalite"]["tmp_name"];
        $tmpName  = $_FILES["image_acte_naissance"]["tmp_name"];

        $validImageExtension = ['jpg', 'jepg', 'png'];
        $imageExtension = explode('.', $filename);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo
            "<script> alert('Invalid Image Extension'); </script>";
        }
        else if($fileSize >1000000){
            echo
            "<script> alert('Image Size is Too Large'); </script>";
        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, '../public/images/' . $newImageName);
            mysqli_query($dbc, $query);
            echo
            "<script>
                alert('Successfully Added');
            </script>";
        }
    }*/
    
?>

<?php
    //script pour la barre de recherche
     $user = 'root';
     $pass = '';

     //ouverture d'une connexion à la BD e_card
    $dbc = new PDO ('mysql:host=localhost;dbname=e_card',$user,$pass);
   
    //preparation de la requete 
    $stmt = $dbc->prepare('SELECT * FROM enrolement');

    //script pour la barre de recherche
    if(isset($_GET['s']) AND !empty($_GET['s'])){
        $recherche = htmlspecialchars($_GET['s']);
        $stmt =  $dbc->query('SELECT * FROM enrolement WHERE nom_citoyen LIKE "%'.$recherche.'%" ORDER BY id DESC');
    }

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

                <style>
                    h1{
                        color:black;     
                        text-decoration:underline;
                        
                    }
                    table{
                        border: 1px solid;
                    }
                    thead{
                        background-color:#17f;
                        font-family:sans-serif; 
                        font-style:italic;
                        text-transform:uppercase;
                    }
                    th{
                        border:1px solid;
                        text-align:center; 
                    }
                    td{
                        border:1px solid;
                        text-align:center; 
                    }
                    tbody{
                        border:1px solid black;
                        text-align:center; 
                    }
                    form{
                        text-align:right;
                        margin-top:5%;
                    }
                </style>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <section>   
                    <form method="GET">
                        <input type="search" name="s" placeholder="Rechercher un utilisateur" autocomplete="off">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button>
                        
                    </form>   
                    <?php 
                        if($stmt->rowCount() > 0){
                            while($enrolement = $stmt->fetch()){
                                ?>
                                <p><?= $enrolement['nom_citoyen']; ?></p>
                                <?php
                                
                            }
                        }else{
                            ?>
                            <p>Aucun utilisateur trouvé</p>
                            <?php
                        }
                    ?>  
                        
                  <h1>Tableau des enregistrés</h1>
                    <table class="table table-striped">
                        
                        <?php foreach($enrolements as $enrolement):?>
                            <thead>
                                <th>Poste d'identification</th>
                                <th>email</th>
                                <th>Telephone</th>
                                <th>Nom citoyen</th>
                                <th>Prenoms citoyen</th>
                                <th>Sexe</th>
                                <th>Profession citoyen</th>
                                <th>Date de naissance</th>
                                <th>Lieu de naissance</th>
                                <th>Departement</th>
                                <th>Teint</th>
                                <th>Taille</th>
                                <th>Groupe ethnique</th>
                                <th>Noms du pere</th>
                                <th>Profession du pere</th>
                                <th>Noms de la mere</th>
                                <th>Profession de la mère</th>
                                <th>Image citoyen</th>
                                <th>Image acte de naissance</th>
                                <th>image acte de naissance</th>
                                <th>Date d'enregistrement</th>
                                <th>Action 1</th>
                                <th>Action 2</th>
                               
                            </thead>
                            
                            <tbody>

                                <tr>
                                <td><?= $enrolement['poste_identification'] ?></td> 
                                    <td><?= $enrolement['email'] ?></td>
                                    <td><?= $enrolement['telephone'] ?></td>
                                    <td><?= $enrolement['nom_citoyen'] ?></td>
                                    <td><?= $enrolement['prenom_citoyen'] ?></td>
                                    <td><?= $enrolement['sexe'] ?></td>
                                    <td><?= $enrolement['profession_citoyen'] ?></td>
                                    <td><?= $enrolement['date_naissance'] ?></td>
                                    <td><?= $enrolement['lieu_naissance'] ?></td>
                                    <td><?= $enrolement['departement'] ?></td>
                                    <td><?= $enrolement['teint'] ?></td>
                                    <td><?= $enrolement['taille'] ?></td>
                                    <td><?= $enrolement['groupe_ethnique'] ?></td>
                                    <td><?= $enrolement['nom_pere'] ?></td>
                                    <td><?= $enrolement['profession_pere'] ?></td>
                                    <td><?= $enrolement['nom_mere'] ?></td>
                                    <td><?= $enrolement['profession_mere'] ?></td>
                                    <td><?= $enrolement['image_citoyen'] ?></td>
                                    <td><?= $enrolement['image_certificat_nationalite'] ?></td>
                                    <td><?= $enrolement['image_acte_naissance'] ?></td>
                                    <td><?= $enrolement['date_enregistrement'] ?></td> 
                                    <td> <a href="delete.php?numEnrolement=<?= $enrolement['id'] ?>"class="btn btn-danger btn-lg">Supprimer</a></td>
                                    <td> <a href="form_modification.php?numEnrolement=<?= $enrolement['id'] ?>" class="btn btn-primary btn-lg" >Editer</a></td>

                                </tr>
                                
                            </tbody>

                        <?php endforeach; ?>    
                    </table>
                </section>
               
            </div>    
        </div>
    </div>    

   
</body>
</html>