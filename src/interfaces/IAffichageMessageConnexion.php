<?php

require_once "IEtatConnexion.php";

interface IAffichageMessageConnexion
{
    public function getMessageConnexion(IEtatConnexion $iec);
    public function getDeconnexion(IEtatConnexion $iec);
}
