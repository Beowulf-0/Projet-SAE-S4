<?php
require_once  '../interfaces/IFormulaire.php';
class Formulaire implements IFormulaire
{
    public function getFormulaire(IDonnesEnvoyables $getTruc): string
    {
        // Importer le code du formulaire lorsqu'il sera terminé
        $html = "";
        return $html;
    }

    public static function printChoices(){
        require ('../php_bdd/config.php');

        $req = "Select * from categoriealiment";
        $sel = $pdo->prepare($req);
        $bool = $sel->execute();

        if($bool){
            $result = $sel->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $result;
    }

    public static function printAlim($value){
        require('../php_bdd/config.php');
        
        //var_dump($value);
        $select = "SELECT * FROM aliment WHERE CategorieAliment=" . $value;
        $sel = $pdo->prepare($select);
        $bool = $sel->execute();

        if($bool){
            $result = $sel->fetchAll(PDO::FETCH_ASSOC);
            $sel->closeCursor();
        }

        return $result;
        
    }

    public static function getAlimNameList($alim){
        return $alim;
    }

}

if(isset($_POST) && !empty($_POST)){
    if(isset($_POST["type"])){
        $type = $_POST["type"];
        
        $aliments = Formulaire::printAlim($type);

        echo json_encode(array_map("Formulaire::getAlimNameList", $aliments));
    }
}