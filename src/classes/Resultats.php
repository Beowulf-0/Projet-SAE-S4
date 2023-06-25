<?php

require_once '../classes/Factory.php';

class Resultats
{

    public static function getStatsGraph($statistiques)
    {
        return $statistiques;
    }
}

$f = new Factory();
$tsql = $f->getTraitementSQL();
$sql = $f->getSQL();

$resultatsCategorie = $tsql->getComptesCategories($sql);
$resultatsBio = $tsql->getComptesBio($sql);
$resultatsVegan = $tsql->getComptesVegan($sql);

echo json_encode([array_map("Resultats::getStatsGraph", $resultatsCategorie),
array_map("Resultats::getStatsGraph", $resultatsBio),
array_map("Resultats::getStatsGraph", $resultatsVegan)]);

?>