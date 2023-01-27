<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulaire</title>
</head>

<body>
    <form action="traitement.php" method="post">
        <div id="nom-prenom">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom" required>

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
        </div>


        <label for="date">Date de naissance</label>
        <input type="date" name="date" id="date" required>

        <label for="tel">Numéro de téléphone</label>
        <input type="tel" name="tel" id="tel" placeholder="Numéro de téléphone" required>

        <label for="adresse-postale">Adresse Postale</label>
        <input type="text" name="adresse-postale" id="adresse-postale" placeholder="Adresse Postale">

        <label for="code-postal">Code postal</label>
        <input type="text" name="code-postal" id="code-postal" placeholder="Code postal">

        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" placeholder="Ville">

        <!--Mettre une case à cocher pour respecter le RGPD-->
        <label for="rgpd">J'accepte le traitement de mes données personnelles</label>
        <input type="checkbox" name="rgpd" id="rgpd" required>

        <!--Faire une liste à partir de la base de données des noms d'aliments-->
        <label for="aliment">Aliment</label>
        <!--A developper-->
        


        <input type="submit" value="Envoyer" id="boutton-validation">

        <!--Bouton annulation-->
        <input type="reset" value="Annuler" id="boutton-annulation">

    </form>
</body>

</html>