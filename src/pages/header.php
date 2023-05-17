<header>
    <div class="text"> Bienvenue <?php $_SESSION['name']?> </div>

    <div id="navbar">
        <?php
        session_start();
        if(isset($_GET['deconnexion']))
        {
            if($_GET['deconnexion']==true)
            {
                session_unset();
                header("location: page_login.php");
            }
        }
        else if($_SESSION['email'] !== ""){
            $user = $_SESSION['user'];
        }
        ?>
        <ul>
            <a href="../pages/resultats.php"> Résultats </a>
            <a href="../pages/profil.php"> Profil </a>
            <a href="header.php?deconnexion=true"> Déconnexion </a>
        </ul>
    </div>
</header>


