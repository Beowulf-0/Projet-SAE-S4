<?php
class Resultats
{
    public static function getLabelsCategorie()
    {
        require("../php_bdd/config.php");
        $select = "SELECT NomCategorie from categoriealiment";
        $sel = $pdo->prepare($select);

        $bool = $sel->execute();

        if($bool){
            $result = $sel->fetchAll(PDO::FETCH_ASSOC);
        }

        return $result;
    }

    public static function getComptesCategorie()
    {
        require("../php_bdd/config.php");
    }
}

?>