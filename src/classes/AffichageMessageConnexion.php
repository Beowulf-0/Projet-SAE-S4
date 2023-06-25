<?php

require_once "../interfaces/IAffichageMessageConnexion.php";
require_once "../interfaces/IEtatConnexion.php";

class AffichageMessageConnexion implements IAffichageMessageConnexion
{
    public function getMessageConnexion(IEtatConnexion $iec)
    {
        session_start();
        if ($iec->estConnecte()) {
            echo 'Bienvenue ' . $_SESSION['user_name'] . '.';
        } else {
            echo 'Connectez-vous.';
        }
    }

    public function getDeconnexion(IEtatConnexion $iec)
    {
        if ($iec->estDeconnecte()) {
            session_unset();
            $_GET['loggedIn'] = false;
            header("location: ../pages/page_login.php");
        }
    }
}
