<html>
<header>

    <h1 class="titre">
        <?php
        require_once "../classes/Factory.php";
        $factory = new Factory();

        $factory->getAffichageMessageConnexion()->getMessageConnexion($factory->getEtatConnexion());
        ?>
    </h1>

    <div id="navbar">
        <?php
        $factory->getAffichageMessageConnexion()->getDeconnexion($factory->getEtatConnexion());
        ?>
        <ul>
            <a href="../pages/resultats.php"> Résultats </a>
            <a href="../pages/sondage.php"> Sondage </a>
            <a href="../pages/profil.php"> Profil </a>
            <a href="../pages/header.php?deconnexion=true"> Déconnexion </a>
        </ul>
    </div>
</header>

</html>