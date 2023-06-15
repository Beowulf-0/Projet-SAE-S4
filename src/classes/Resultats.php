<?php
class Resultats
{

    public static function getComptesCategories()
    {
        require("../php_bdd/config.php");
        $count = "SELECT c.NomCategorie, count(a.IdAliment) as nombreAliments FROM sondes AS s 
        INNER JOIN aliment AS a ON IFNULL(s.Aliment1,-1) = a.IdAliment 
        OR IFNULL(s.Aliment2,-1) = a.IdAliment OR IFNULL(s.Aliment3,-1) = a.IdAliment 
        OR IFNULL(s.Aliment4,-1) = a.IdAliment OR IFNULL(s.Aliment5,-1) = a.IdAliment 
        OR IFNULL(s.Aliment6,-1) = a.IdAliment OR IFNULL(s.Aliment7,-1) = a.IdAliment 
        OR IFNULL(s.Aliment8,-1) = a.IdAliment OR IFNULL(s.Aliment9,-1) = a.IdAliment 
        OR IFNULL(s.Aliment10,-1) = a.IdAliment 
        INNER JOIN categoriealiment AS c ON a.CategorieAliment = c.IdCategorie
        GROUP BY a.CategorieAliment";

        $sel = $pdo->prepare($count);

        $bool = $sel->execute();
        
        if($bool){
            $result = $sel->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
    }

    public static function getComptesBio(){
        require("../php_bdd/config.php");

        $count = "SELECT IF(c.idCategorie = 12, 'Bio', 'Non bio') as BioOuPas, count(a.IdAliment) as nombreAliments FROM sondes AS s 
        INNER JOIN aliment AS a 
        ON IFNULL(s.Aliment1,-1) = a.IdAliment 
        OR IFNULL(s.Aliment2,-1) = a.IdAliment 
        OR IFNULL(s.Aliment3,-1) = a.IdAliment 
        OR IFNULL(s.Aliment4,-1) = a.IdAliment 
        OR IFNULL(s.Aliment5,-1) = a.IdAliment 
        OR IFNULL(s.Aliment6,-1) = a.IdAliment 
        OR IFNULL(s.Aliment7,-1) = a.IdAliment 
        OR IFNULL(s.Aliment8,-1) = a.IdAliment 
        OR IFNULL(s.Aliment9,-1) = a.IdAliment OR IFNULL(s.Aliment10,-1) = a.IdAliment INNER JOIN categoriealiment AS c ON a.CategorieAliment = c.IdCategorie GROUP BY BioOuPas;";

        $sel = $pdo->prepare($count);

        $bool = $sel->execute();

        if($bool){
            $result = $sel->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
    }

    public static function getComptesVegan(){
        require("../php_bdd/config.php");

        $count = "SELECT IF(c.idCategorie = 13, 'Vegan', 'Pas vegan') as VeganOuPas, count(a.IdAliment) as nombreAliments FROM sondes AS s 
        INNER JOIN aliment AS a 
        ON IFNULL(s.Aliment1,-1) = a.IdAliment 
        OR IFNULL(s.Aliment2,-1) = a.IdAliment 
        OR IFNULL(s.Aliment3,-1) = a.IdAliment 
        OR IFNULL(s.Aliment4,-1) = a.IdAliment 
        OR IFNULL(s.Aliment5,-1) = a.IdAliment 
        OR IFNULL(s.Aliment6,-1) = a.IdAliment 
        OR IFNULL(s.Aliment7,-1) = a.IdAliment 
        OR IFNULL(s.Aliment8,-1) = a.IdAliment 
        OR IFNULL(s.Aliment9,-1) = a.IdAliment OR IFNULL(s.Aliment10,-1) = a.IdAliment INNER JOIN categoriealiment AS c ON a.CategorieAliment = c.IdCategorie GROUP BY VeganOuPas;";

        $sel = $pdo->prepare($count);

        $bool = $sel->execute();

        if($bool){
            $result = $sel->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
    }

    public static function getStatsGraph($statistiques)
    {
        return $statistiques;
    }
}

$resultatsCategorie = Resultats::getComptesCategories();
$resultatsBio = Resultats::getComptesBio();
$resultatsVegan = Resultats::getComptesVegan();
echo json_encode([array_map("Resultats::getStatsGraph", $resultatsCategorie),
array_map("Resultats::getStatsGraph", $resultatsBio),
array_map("Resultats::getStatsGraph", $resultatsVegan)]);

?>