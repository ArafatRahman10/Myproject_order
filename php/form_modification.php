<?php
    //script pour supprimer un utilisateur dans la bd
     $user = 'root';
     $pass = '';

     //ouverture d'une connexion à la BD e_card
    $dbc = new PDO ('mysql:host=localhost;dbname=e_card',$user,$pass);

    //preparation de la requete 
    $stmt = $dbc->prepare('SELECT * FROM enrolement WHERE id=:num');

    //liaison du paramétre nommé
    $stmt->bindValue(':num', $_GET['numEnrolement'], PDO::PARAM_INT);

    //exécution de la requete
    $executetIsOk =  $stmt->execute();

    //recupération de tous les éléments
    $enrolements = $stmt->fetchAll();
   
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" >
        <title>E.Card</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">
        <link rel="shortcut icon" href ="../public/images/logo.png">
        <link rel="stylesheet" href="../public/css/../style/formregister.css">
        <script src="../js/bootstrap.js"></script>
    </head>
      
    <body>

        <form id="regForm" action="../../php/insertion.php" method="post">
            <h3>Information de la demande</h3>
            <!-- un onglet pour chaque étapes du formulaires: -->
            <div class="tab">
                <label class="mb-3">Poste d'identification</label>
                <select name="poste_identification" id="" class="form-control">
                    <option value="Commisariat du 1er (Centre Administratif)-CENTRE">Commisariat du 1er (Centre Administratif)-CENTRE</option>
                    <option value="Commisariat 2eme (Mokolo)-CENTRE">Commisariat 2eme (Mokolo)-CENTRE</option>
                    <option value="Commisariat 3eme (Nkoldongo)-CENTRE">Commisariat 3eme (Nkoldongo)-CENTRE</option>
                    <option value="Commisariat 5eme (Ngoa-Ekellé)-CENTRE">Commisariat 5eme (Ngoa-Ekellé)-CENTRE</option>
                    <option value="Commisariat 6eme (Etoudi)-CENTRE">Commisariat 6eme (Etoudi)-CENTRE</option>
                    <option value="Commisariat 10eme (Bastos)-CENTRE">Commisariat 10eme (Bastos)-CENTRE</option>
                    <option value="Commisariat 17eme (Messassi)-CENTRE">Commisariat 17eme (Messassi)-CENTRE</option>
                    <option value="Commisariat 18eme (Ngousso)-CENTRE">Commisariat 18eme (Ngousso)-CENTRE</option>
                    <option value="Commisariat 8eme (Mbankolo)-CENTRE">Commisariat 8eme (Mbankolo)-CENTRE</option>
                    <option value="Commisariat 11eme (Cite Verte)-CENTRE">Commisariat 11eme (Cite Verte)-CENTRE</option>
                    <option value="Commisariat 12eme (Nkolbison)-CENTRE">Commisariat 12eme (Nkolbison)-CENTRE</option>
                    <option value="Commisariat 7eme (Efoulan)-CENTRE">Commisariat 7eme (Efoulan)-CENTRE</option>
                    <option value="Commisariat 9eme (Medong)-CENTRE">Commisariat 9eme (Medong)-CENTRE</option>
                    <option value="Commisariat 19eme (Ahala)-CENTRE">Commisariat 13eme (Melen)-CENTRE</option>
                    <option value="Commisariat 19eme (Ahala)-CENTRE">Commisariat 19eme (Ahala)-CENTRE</option>
                    <option value="Commisariat 4eme (Mimboman)-CENTRE">Commisariat 4eme (Mimboman)-CENTRE</option>
                    <option value="Commisariat 14eme (Ekounou)-CENTRE">Commisariat 14eme (Ekounou)-CENTRE</option>
                    <option value="Commisariat 15eme (Odza)-CENTRE">Commisariat 15eme (Odza)-CENTRE</option>
                    <option value="Commisariat 16eme (Mimboman Château)-CENTRE">Commisariat 16eme (Mimboman Château)-CENTRE</option>
                    <option value="Commisariat 20eme (Biteng Maetur)-CENTRE">Commisariat 20eme (Biteng Maetur)-CENTRE</option>
                    <option value="Commisariat Central - ADAMAOUA">Commisariat Central - ADAMAOUA</option>
                    <option value="Commisariat Central - EST">Commisariat Central - EST</option>
                    <option value="Commisariat Central - EXTREME-NORD">Commisariat Central - EXTREME-NORD</option>
                    <option value="Commisariat Central N°01 - LITTORAL">Commisariat Central N°01 - LITTORAL</option>
                    <option value="Commisariat Central N°02 - LITTORAL">Commisariat Central N°02 - LITTORAL</option>
                    <option value="Commisariat Central N°03 - LITTORAL">Commisariat Central N°03 - LITTORAL</option>
                    <option value="Commisariat Central N°04 - LITTORAL">Commisariat Central N°04 - LITTORAL</option>
                    <option value="Commisariat Central - NORD ">Commisariat Central - NORD </option>
                    <option value="Commisariat Central - NORD-OUEST">Commisariat Central - NORD-OUEST</option>
                    <option value="Commisariat Central - OUEST">Commisariat Central - OUEST</option>
                    <option value="Commisariat Central - SUD-OUEST">Commisariat Central - SUD-OUEST</option>
                </select>
                <label>Adresse Mail</label>
                <input type="text" name="email" class="form-control">
                <label>Téléphone</label>
                <input type="number" name="telephone" placeholder="+237..."class="form-control" maxlength="9" required>
            </div>
            <div class="tab">
                <h4><B>Détails du citoyen</h4></B>
                <label>Nom</label>
                <input type="text" name="nom_citoyen" class="form-control" required>
                <label>Prénoms</label>
                <input type="text" name="prenom_citoyen"class="form-control" required>
                <label>Sexe:
                    M<input type="radio" name="sexe" value="M" required checked>
                    F<input type="radio" name="sexe" value="F" required> 
                </label><br>
                <label>Profession</label>
                <input type="text" name="profession_citoyen"class="form-control" required>
                <label>Date naissance</label>
                <input type="date" name="date_naissance"class="form-control">
                <label>Lieu de naissance</label>
                <input type="text" name="lieu_naissance"class="form-control" required>
                <label >Département</label>
                <select name="departement" id="" class="form-control ">
                    <option value="Djérem">Djérem</option>
                    <option value="Faro -et-Déro">Faro -et-Déro</option>
                    <option value="Mayo-Banyo">Mayo-Banyo</option>
                    <option value="Mbéré">Mbéré</option>
                    <option value="Vina">Vina</option>
                    <option value="Haute-Sanaga">Haute-Sanaga</option>
                    <option value="Lekié">Lekié</option>
                    <option value="Mbam-et-Inoubou">Mbam-et-Inoubou</option>
                    <option value="Mbam-et-Kim">Mbam-et-Kim</option>
                    <option value="Méfou-et-Afamba">Méfou-et-Afamba</option>
                    <option value="Méfou-et-Akono">Méfou-et-Akono</option>
                    <option value="Mfoundi">Mfoundi</option>
                    <option value="Nyong-et-Kellé">Nyong-et-Kellé</option>
                    <option value="Nyong-et-Mfoumou">Nyong-et-Mfoumou</option>
                    <option value="Nyong-et-So'o">Nyong-et-So'o</option>
                    <option value="Boumba-et-Ngoko">Boumba-et-Ngoko</option>
                    <option value="Kadey">Kadey</option>
                    <option value="Lom-et-Djerem">Lom-et-Djerem</option>
                    <option value="Diamaré">Diamaré</option>
                    <option value="Logone-et-chari">Logone-et-chari</option>
                    <option value="Mayo-Danay">Mayo-Danay</option>
                    <option value="Mayo-Kani">Mayo-Kani</option>
                    <option value="Mayo-Sava">Mayo-Sava</option>
                    <option value="Mayo-Tsanaga">Mayo-Tsanaga</option>
                    <option value="Moungo">Moungo</option>
                    <option value="Nkam">Nkam</option>
                    <option value="Sanaga-Maitime">Sanaga-Maitime</option>
                    <option value=">Wouri">Wouri</option>
                    <option value="Bénoué">Bénoué</option>
                    <option value="Faro">Faro</option>
                    <option value="Mayo-Louti">Mayo-Louti</option>
                    <option value="Mayo-Rey">Mayo-Rey</option>
                    <option value="Boyo">Boyo</option>
                    <option value="Bui">Bui</option>
                    <option value="Donga-Mantung">Donga-Mantung</option>
                    <option value="Menchum">Menchum</option>
                    <option value="Mezam">Mezam</option>
                    <option value="Momo">Momo</option>
                    <option value="Ngo-Ketunjia">Ngo-Ketunjia</option>
                    <option value="Bamboutos">Bamboutos</option>
                    <option value="Haut-NKam">Haut-NKam</option>
                    <option value="Hauts-Plateaux">Hauts-Plateaux</option>
                    <option value="koung-khi">koung-khi</option>
                    <option value="Menoua">Menoua</option>
                    <option value="Mifi">Mifi</option>
                    <option value="Ndé">Ndé</option>
                    <option value="Noun">Noun</option>
                    <option value="Dja-et-Lobo">Dja-et-Lobo</option>
                    <option value="Mvila">Mvila</option>
                    <option value="Océan">Océan</option>
                    <option value="Vallée-du-Ntem">Vallée-du-Ntem</option>
                    <option value="Fako">Fako</option>
                    <option value="Koupé-Manengouba">Koupé-Manengouba</option>
                    <option value="Lebialem">Lebialem</option>
                    <option value="Manyu">Manyu</option>
                    <option value="Meme">Meme</option>
                    <option value="Ndian">Ndian</option>
                </select>
            </div>
            <div class="tab">
                <h4><B>Signalement</h4></B>
                <label>Teint</label>
                <select name="teint" id="" class="form-control ">
                    <option value="NOIR">NOIR</option>
                    <option value="CHOCOLAT">CHOCOLAT</option>
                    <option value="BRUN">BRUN</option> 
                </select>
                <label>Taille</label>
                <input type="text" name="taille" class="form-control" required>
                <label>Groupe ethnique</label>
                <input type="text" name="groupe_ethnique"class="form-control" required>
            </div>
            <div class="tab">
                <h4><B>Parents</h4></B>
                <label>Noms du père</label>
                <input type="text" name="nom_pere" class="form-control ">
                <label>Profession du père</label>
                <input type="text" name="profession_pere" class="form-control" required>
                <label>Noms de la mère</label>
                <input type="text" name="nom_mere"class="form-control" required>
                <label>Profession de la mère</label>
                <input type="text" name="profession_mere" class="form-control" required>
            </div>
            <div class="tab">
                <h4><B>Pièces jointes</h4></B>
                <label>Image du citoyen</label>
                <input type="file" name="image_citoyen" class="form-control" accept=".jpg, .jpeg, .png" value="" required>
                <label>Image certificat de nationalité du citoyen</label>
                <input type="file" name="image_certificat_nationalite" class="form-control" accept=".jpg, .jpeg, .png" value="" required>
                <label>Image acte de naissance du citoyen</label>
                <input type="file" name="image_acte_naissance"class="form-control" accept=".jpg, .jpeg, .png" value="" required>
            </div>
          
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next </button>
                </div>
            </div>
            <!-- des cercles qui indiquent les étapes du formulaires: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>

        <script>
            var currentTab = 0; // l'onglet actuel est défini comme étant le premier onglet (0)
            showTab(currentTab); // affiche l'onglet courant

            function showTab(n) {
            // cette fonction affiche l'onglet spécifié du formulaire...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... et corrige les boutons précédent/suivant:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... et exécutera une fonction qui affichera le bon indicateur d'étape:
            fixStepIndicator(n)
            }

            function nextPrev(n) {
            // cette fonction déterminéra l'onglet afficher
            var x = document.getElementsByClassName("tab");
            // quitte la fonction si un champs de l'onglet est invalide:
            if (n == 1 && !validateForm()) return false;
            // masque l'onglet courant:
            x[currentTab].style.display = "none";
            // Iaugmente ou diminue l'onglet courant de 1:
            currentTab = currentTab + n;
            // si vous avez atteint la fin du formulaire...
            if (currentTab >= x.length) {
                // ... le formulaire est soumis:
                document.getElementById("regForm").submit();
                return false;
            }
            // sinon, afficher le bon onglet:
            showTab(currentTab);
            }

            function validateForm() {
            // cette fonction s'occupe de la validation des champs du formulaires
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // une boucle qui vérifie chaque champs d'entrée dans l'onglet actuel:
            for (i = 0; i < y.length; i++) {
                // si champ est vide...
                if (y[i].value == "") {
                // ajoute une classe "invalide" au champ:
                y[i].className += " invalid";
                // et définie le statut actuel sur faux
                valid = false;
                }
            }
            // si le statut valide est vrai, marque l'étape comme terminée et valide:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // renvoie le statut valide
            }

            function fixStepIndicator(n) {
            // cette fonction supprime la classe "active" de toutes les étapes...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... et ajoute la classe active sur l'étape en cours:
            x[n].className += " active";
            }
        </script>

    </body>
</html>
