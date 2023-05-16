<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Création de compte</title>
    <link rel="stylesheet" type="text/css" href="../style/styleLogin.css">
</head>


<body>
    <div id="container">
        <form action="../php_bdd/verif_creation.php" method="post" name="form">
            <div>
                <label> Adresse mail </label>
                <input type="text" placeholder="Entrer votre adresse mail" name="mail" required>
            </div>

            <div>
                <label> Nom d'utilisateur </label>
                <input type="text" placeholder="Entrer votre nom d'utilisateur" name="name" required>
            </div>

            <div>
                <label> Mot de passe </label>
                <input type="password" placeholder="Entrer votre mot de passe" name="mdp" required>
            </div>

            <div>
                <label> Numéro de téléphone </label>
                <input type="tel" placeholder="Entrer votre numéro de téléphone" pattern="[0][1-9]{2}[0-9]{8}" name="num" required>
            </div>

            <input type="submit" value="S'inscrire" id="submit">
            <?php 
                if(isset($_GET['erreur'])){
                    $err= $_GET['erreur'];
                    if($err == 1 || $err == 2){
                        echo "<p style='color: red'> Utilisateur invalide </p>";
                    }
                }
            ?>
            
            <a href="./page_login.php"> Vous avez déjà un compte ? Connectez-vous. </a>
        </form>
    </div>

</body>

</html>