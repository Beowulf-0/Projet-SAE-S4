<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Création de compte</title>
    <link rel="stylesheet" type="text/css" href="../style/styleLogin.css">
</head>


<body>
    <div id="container">
        <form action="./page_login.php" method="post" name="form">
            <div>
                <label> Adresse mail </label>
                <input type="text" placeholder="Entrer votre adresse mail" name="mail" required>
            </div>

            <div>
                <label> Mot de passe </label>
                <input type="password" placeholder="Entrer votre mot de passe" name="mdp" required>
            </div>

            <div>
                <label> Numéro de téléphone </label>
                <input type="text" placeholder="Entrer votre numéro de téléphone" name="num" required>
            </div>

            <input type="submit" value="S'inscrire" id="submit">
            <a href="./page_login.php"> Vous avez déjà un compte ? Connectez-vous. </a>
        </form>
    </div>

</body>

</html>