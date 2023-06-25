<form action="../php_bdd/modification_profil.php" method="POST" name="email">
    <label for="titre"> Changement d'adresse mail </label>

    <div>
        <label> Ancienne adresse mail </label>
        <input type="email" placeholder="Entrez votre ancienne adresse mail" name="a_mail" required>
    </div>

    <div>
        <label> Nouvelle adresse mail </label>
        <input type="email" placeholder="Entrez votre nouvelle adresse mail" name="n_mail" required>
    </div>

    <?php
    if(isset($_GET['erreur_mail'])){
        $err = $_GET['erreur_mail'];
        if($err == 1){
            echo "<p style='color:red'>Nouveau mail similaire à l'ancien</p>";
        }
        elseif($err == 2 || $err == 3) echo "<p style='color:red'>Email incorrect</p>";
    }
    if(isset($_GET['mdp_valide'])){
        echo "<p style='color:green'>Changement de mot de passe réussi !</p>";
    }
    ?>

    <div id="boutons">
        <input type="submit" name="email_change" value="Soumettre" id="bouton-validation">


        <!--Bouton annulation-->
        <input type="reset" value="Réinitialiser" id="bouton-annulation">
    </div>

</form>