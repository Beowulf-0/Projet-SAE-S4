<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Connexion au compte</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/styleForm.css">
</head>


<body>
    <div id="container">
        <form action="../php_bdd/verif_login.php" method="POST" name="form_log">
            <div>
                <label> Adresse mail </label>
                <input type="email" placeholder="Entrer votre adresse mail" name="mail" required>
            </div>
            <div>
                <label> Mot de passe </label>
                <input type="password" placeholder="Entrer votre mot de passe" name="mdp" required>
            </div>
            <input type="submit" value="Se connecter" id="submit">
            <?php 
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err == 1 || $err == 2) echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                if(isset($_GET['mail_valide'])){
                    echo "<p style='color:green'>Changement de mail réussi !</p>";
                }
            ?> 
            <a href="./page_creation_compte.php"> Vous n'avez pas de compte ? Inscrivez-vous. </a>
        </form>
    </div>
</body>

</html>
