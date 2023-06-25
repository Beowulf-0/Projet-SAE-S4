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
                <input type="tel" placeholder="Entrer votre numéro de téléphone" pattern="[0-9]{10}" name="num" required>
            </div>

            <input type="submit" value="S'inscrire" id="submit">
            <?php
                if(isset($_GET['erreur'])){
                    $err= $_GET['erreur'];
                    if($err == 1 || $err == 2){
                        echo "<p style='color: red'> Utilisateur invalide </p>";
                    }
                    else{
                        echo "<p style='color: red'> Email, nom ou numéro déjà existant </p>";
                    }
                }
            ?>

            <a href="../pages/page_login.php"> Vous avez déjà un compte ? Connectez-vous. </a>
        </form>