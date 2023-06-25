<?php

require_once "ISQL.php";

interface ITraitementSQL
{
    public function getComptesCategories(ISQL $sql);

    public function getComptesBio(ISQL $sql);

    public function getComptesVegan(ISQL $sql);

    public function getStatsGraph($statistiques);

    public function printChoices(ISQL $sql);

    public function printAlim(ISQL $sql, $value);
}