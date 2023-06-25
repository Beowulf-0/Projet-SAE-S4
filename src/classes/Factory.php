<?php

require_once "../interfaces/IAffichageFormulaire.php";
require_once "../interfaces/IAffichageMessageConnexion.php";
require_once "../interfaces/IEtatConnexion.php";
require_once "../interfaces/IFactory.php";
require_once "../interfaces/ITraitementSQL.php";
require_once "../interfaces/ISQL.php";

require_once "../classes/AffichageFormulaire.php";
require_once "../classes/AffichageMessageConnexion.php";
require_once "../classes/EtatConnexion.php";
require_once "../classes/TraitementSQL.php";
require_once "../classes/SQL.php";


class Factory implements IFactory
{
    public function getAffichageMessageConnexion(): IAffichageMessageConnexion
    {
        return new AffichageMessageConnexion();
    }

    public function getEtatConnexion(): IEtatConnexion
    {
        return new EtatConnexion();
    }

    public function getSQL(): ISQL
    {
        return new SQL();
    }

    public function getTraitementSQL(): ITraitementSQL
    {
        return new TraitementSQL();
    }

    public function getAffichageFormulaire(): IAffichageFormulaire
    {
        return new AffichageFormulaire();
    }
}
