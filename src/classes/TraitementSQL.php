<?php

require_once("../interfaces/IFactory.php");

class TraitementSQL implements ITraitementSQL
{


    private function getSQLResult(string $sqlRequest)
    {
        require("../php_bdd/config.php");

        $count = $sqlRequest;

        $sel = $pdo->prepare($count);

        $bool = $sel->execute();

        if($bool){
            $result = $sel->fetchAll(PDO::FETCH_ASSOC);
        }

        return $result;
    }

    public function getComptesCategories(ISQL $sql)
    {
        return $this->getSQLResult($sql->getComptesCategories());
    }

    public function getComptesBio(ISQL $sql){
        return $this->getSQLResult($sql->getEstBio());
    }

    public function getComptesVegan(ISQL $sql){
        return $this->getSQLResult($sql->getEstVegan());
    }

    public function getStatsGraph($statistiques)
    {
        return $statistiques;
    }

    public function printChoices(ISQL $sql): string{
        return $sql->getAllCategorieAliments();
    }

    public function printAlim(ISQL $sql, $value): string{
        return $sql->getAllAlimentsCategorie($value);
    }
}
?>