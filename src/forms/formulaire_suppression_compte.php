<form action="../php_bdd/modification_profil.php" method="POST" name="account_removal">
    <label for="titre"> Suppression de compte </label>

    <div>
        <label> Adresse mail </label>
        <input type="email" placeholder="Entrez votre adresse mail" name="mail" required>
    </div>

    <div>
        <label> Mot de passe </label>
        <input type="password" placeholder="Entrez votre mot de passe" name="pass" required>
    </div>

    <div id="boutons">
        <input type="submit" name="account_removal" value="Soumettre" id="bouton-validation">

        <!--Bouton annulation-->
        <input type="reset" value="Réinitialiser" id="bouton-annulation">
    </div>

</form>