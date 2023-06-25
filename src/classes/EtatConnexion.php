<?php

class EtatConnexion implements IEtatConnexion
{
    public function estConnecte(): bool
    {
        return isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true;
    }

    public function estDeconnecte(): bool
    {
        return isset($_GET['deconnexion']) && $_GET['deconnexion'] == true;
    }
}
