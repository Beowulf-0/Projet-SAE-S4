<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulaire</title>
    <link rel="stylesheet" type="text/css" href="../style/styleForm.css">
</head>

<body>
    <form action="traitement.php" method="post" id="form_ident">
        <label class="titre">Formulaire de renseignement</label>
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
            <input type="text" name="ville" id="ville" placeholder="Ville">
        </div>

        <!--Mettre une case à cocher pour respecter le RGPD-->
        <label for="rgpd">J'accepte le traitement de mes données personnelles</label>
        <input type="checkbox" name="rgpd" id="rgpd" required>

        <!--Faire une liste à partir de la base de données des noms d'aliments-->
        <label for="aliment">Aliment</label>
        <!--A developper-->
        

        <div id="boutons">
            <input type="submit" value="Envoyer" id="bouton-validation">

            <!--Bouton annulation-->
            <input type="reset" value="Annuler" id="bouton-annulation">
        </div>

    </form>
</body>

</html>