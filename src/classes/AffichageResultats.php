<?php

require_once "../interfaces/IFactory.php";
require_once "../interfaces/ITraitementSQL.php";

class AffichageResultats
{
    public static function getResultats()
    {
        //Fonction appelable sans paramètres
        $f = new Factory();
        $t = $f->getTraitementSQL();
        $sql = $f->getSQL();

        $resultatsCategorie = $t->getComptesCategories($sql);
        $resultatsBio = $t->getComptesBio($sql);
        $resultatsVegan = $t->getComptesVegan($sql);
        echo json_encode([array_map("TraitementSQL::getStatsGraph", $resultatsCategorie),
            array_map("TraitementSQL::getStatsGraph", $resultatsBio),
            array_map("TraitementSQL::getStatsGraph", $resultatsVegan)]);
    }
}