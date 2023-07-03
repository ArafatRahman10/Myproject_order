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
</head>
<body>
    <table class="table table-striped">
        <thead>
          
           <th>Poste d'identification</th>
           <th>email</th>
           <th>Téléphone</th>
           <th>Nom citoyen</th>
           <th>Prénoms citoyen</th>
           <th>Sexe</th>
           <th>Profession citoyen</th>
           <th>Date de naissance</th>
           <th>Lieu de naissance</th>
           <th>Departement</th>
           <th>Teint</th>
           <th>Taille</th>
           <th>Groupe ethnique</th>
           <th>Noms du père</th>
           <th>Profession du père</th>
           <th>Noms de la mère</th>
           <th>Profession de la mère</th>
           <th>Image citoyen</th>
           <th>Image acte de naissance</th>
           <th>image acte de naissance</th>
           <th>Date d'enregistrement</th>

           <th>action</th>
        </thead>

        <tbody>
            <tr>
                <td> <?php echo $show['poste_identification']?></td>
                <td> <?php echo $show['email']   ?></td>
                <td> <?php echo $show ['telephone'] ?> </td>
                <td> <?php echo $show  ['nom_citoyen'] ?> </td>
                <td> <?php echo $show ['prenom_citoyen'] ?>  </td>
                <td> <?php echo $show  ['sexe']  ?></td>
                <td> <?php echo $show  ['profession_citoyen'] ?> </td>
                <td> <?php echo $show  ['date_naissance']?>  </td>
                <td> <?php echo $show  ['lieu_naissance'] ?> </td>
                <td> <?php echo $show  ['departement'] ?> </td>
                <td> <?php echo $show  ['teint'] ?> </td>
                <td> <?php echo $show  ['taille']?>  </td>
                <td> <?php echo $show ['groupe_ethnique']  ?> </td>
                <td> <?php echo $show ['nom_pere'] ?>  </td>
                <td> <?php echo $show ['profession_pere']  ?> </td>
                <td> <?php echo $show ['nom_mere']  ?> </td>
                <td> <?php echo $show  ['profession_mere']?>  </td>
               
                <td> <img src="../public/images/<?php echo $show['image_citoyen']?>" alt=""> </td>
                <td> <img src="../public/images/<?php echo $show['image_certificat_nationalite']?>" alt=""> </td>
                <td> <img src="../public/images/<?php echo $show['image_acte_naissance']?>" alt=""> </td>

               <td></td>

            </tr>
        </tbody>
       
    </table>
</body>
</html>