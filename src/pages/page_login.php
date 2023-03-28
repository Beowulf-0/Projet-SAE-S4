<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Connexion au compte</title>
    <link rel="stylesheet" type="text/css" href="../style/styleLogin.css">
</head>


<body>
    <div id="container">
        <form action="./accueil.php" name="form">
            <div>
                <label> Adresse mail </label>
                <input type="text" placeholder="Entrer votre adresse mail" name="group" required>
            </div>
            <div>
                <label> Mot de passe </label>
                <input type="text" placeholder="Entrer votre mot de passe" name="group" required>
            </div>
            <input type="submit" value="Se connecter" id="submit">
            <a href="./page_creation_compte.php"> Vous n'avez pas de compte ? Inscrivez-vous. </a>
        </form>
    </div>
</body>

</html>
