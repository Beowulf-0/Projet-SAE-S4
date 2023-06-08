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

    public static function printAlim(int $value){
        require('../php_bdd/config.php');

        
    }
}