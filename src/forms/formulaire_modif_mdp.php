<form action="../php_bdd/modification_profil.php" method="POST" name="password">
    <label for="titre"> Changement de mot de passe </label>

    <div>
        <label> Adresse mail </label>
        <input type="email" placeholder="Entrez votre adresse mail" name="mail" required>
    </div>

    <div>
        <label> Ancien mot de passe </label>
        <input type="password" placeholder="Entrez votre ancien mot de passe" name="a_mdp" required>
    </div>

    <div>
        <label> Nouveau mot de passe </label>
        <input type="password" placeholder="Entrez votre nouveau mot de passe" name="n_mdp" required>
    </div>

    <div>
        <label> Nouveau mot de passe à reconfirmer </label>
        <input type="password" placeholder="Reconfirmez votre mot de passe" name="rn_mdp" required>
    </div>

    <?php
    if(isset($_GET['erreur_mdp'])){
        $err = $_GET['erreur_mdp'];
        if($err == 1 || $err == 2 || $err == 3) echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
    }
    elseif(isset($_GET['mdp_valide'])){
        echo "<p style='color:green'>Changement de mot de passe réussi !</p>";
    }
    ?>

    <div id="boutons">
        <input type="submit" name="password_change" value="Soumettre" id="bouton-validation">

        <!--Bouton annulation-->
        <input type="reset" value="Réinitialiser" id="bouton-annulation">
    </div>

</form>