<html>
    <header>
        
        <h1 class="titre"> 
            <?php
                session_start();
                //echo $_SESSION['loggedIn'];
                if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
                    echo 'Bienvenue ' . $_SESSION['user_name'] . '.';
                }
                else{
                    echo 'Connectez-vous.';
                }
            ?>
        </h1>

        <div id="navbar">
            <?php
            if(isset($_GET['deconnexion']))
            {
                if($_GET['deconnexion']==true)
                {
                    session_unset();
                    $_GET['loggedIn'] = false;
                    header("location: ../pages/page_login.php");
                }
            }
            ?>
            <ul>
                <a href="../pages/resultats.php"> Résultats </a>
                <a href="../pages/accueil.php"> Sondage </a>
                <a href="../pages/profil.php"> Profil </a>
                <a href="../pages/header.php?deconnexion=true"> Déconnexion </a>
            </ul>
        </div>
    </header>
</html>

