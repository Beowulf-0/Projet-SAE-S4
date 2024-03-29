<form action="../php_bdd/verif_sondage.php" method="post" id="form_ident">
    <label for="titre"><b>Formulaire de renseignement</b></label>

    <div id="nom-prenom">
        <div>
            <label for="nom" class="titre">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom" required>
        </div>
        <div>
            <label for="prenom" class="titre">Prénom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
        </div>
    </div>

    <div id="adresse-code-postal">
        <div>
            <label for="adresse-postale" class="titre">Adresse Postale (facultatif)</label>
            <input type="text" name="adresse-postale" id="adresse-postale" placeholder="Adresse Postale">
        </div>

        <div>
            <label for="code-postal" class="titre">Code postal (facultatif)</label>
            <input type="text" name="code-postal" id="code-postal" placeholder="Code postal">
        </div>
    </div>

    <div id="date-tel-ville">

        <label for="date" class="titre">Date de naissance</label>
        <input type="date" name="date" id="date" required>

        <label for="tel" class="titre">Numéro de téléphone</label>
        <input type="tel" name="tel" id="tel" placeholder="Numéro de téléphone" required>

        <label for="ville" class="titre">Ville</label>
        <input type="text" name="ville" id="ville" placeholder="Ville" required>
    </div>

    <!--Mettre une case à cocher pour respecter le RGPD-->
    <label for="rgpd">J'accepte le traitement de mes données personnelles</label>
    <input type="checkbox" name="rgpd" id="rgpd" required>

    <!--Faire une liste à partir de la base de données des noms d'aliments-->
    <label for="aliment">Aliment</label>
    <!--A developper-->

    <div id="categorie">
        <?php
        require('../classes/Formulaire.php');
        $data = Formulaire::printChoices();
        for($i = 1; $i <= 10; $i++){
            echo '<label for="titre"> Aliment ' . $i .  '</label>';
            echo '<select name="categ" class="alim-select"> ';
            echo '<option disabled selected value="null"> Veuillez choisir une catégorie </option>';
            foreach($data as $value){
                echo '<option value="' . $value['idCategorie']. '">' . $value['NomCategorie'] . '</option>';
            }
            echo '</select>';
            echo '<select name="alim-'.$i.'" class="aliments">';
            echo '<option disabled selected value="null"> Veuillez choisir un aliment </option>';;
            echo '</select>';
        }
        ?>
    </div>


    <div id="boutons">
        <input type="submit" value="Envoyer" id="bouton-validation">

        <!--Bouton annulation-->
        <input type="reset" value="Effacer" id="bouton-annulation">
    </div>
    <?php
    if(isset($_GET['err'])){
        $err = $_GET['err'];
        if($err == 1) echo "<p style='color:red'>Sondage incorrect. Veuillez soumettre des aliments SVP.</p>";
        elseif($err == 2) echo "<p style='color:red'>Utilisateur existant déjà.</p>";
    }
    ?>
</form>