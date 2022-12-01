<?php
  $user = 'root';
  $pass = '';
  try {
    $db = new PDO ('mysql:host=localhost;dbname=e_card',$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO enrolement(non_citoyen,prenom_citoyen,sexe,profession_citoyen,date_naissance,
  lieu_naissance,departement,telephone,email,teint,taille,groupe_ethnique,profession_pere,
  nom_mere,profession_mere,image_citoyen,image_certificat_nationalite,image_acte_naissance)
  VALUES('$_POST['nom_citoyen']','$_POST['prenom_citoyen']','$_POST['sexe']','$_POST['profession_citoyen']','$_POST
  ['date_naissance']','$_POST['lieu_naissance']','$_POST['departement']','$_POST['telephone']','$_POST['email']',
  '$_POST['teint']','$_POST['taille']','$_POST['groupe_ethnique']','$_POST['profession_pere']','$_POST['nom_mere]',
  '$_POST['profession_mere']','$_POST['image_ctoyen']','$_POST['image_certificat_nationalite']','$_POST['image_acte_naissance']'";

$db->exec($sql);
echo "Nouveau enregistrement ajouté avec succèss!";
  } catch (PDOExcetion $e) {
    echo $sql. "<br>". $e->getMessage();
  }
  $db = null;
 
?>

  

 
  