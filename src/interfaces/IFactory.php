<?php

require_once "IAffichageMessageConnexion.php";
require_once "IEtatConnexion.php";
require_once "ITraitementSQL.php";
require_once "ISQL.php";

interface IFactory
{
    public function getAffichageMessageConnexion(): IAffichageMessageConnexion;

    public function getEtatConnexion(): IEtatConnexion;

    public function getSQL(): ISQL;

    public function getTraitementSQL(): ITraitementSQL;
}