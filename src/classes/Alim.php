<?php

require __DIR__ .  '\classes-sql\Aliments.php';
require __DIR__ . '\..\interfaces\IAliment.php';

class Alim implements IAliment
{
    /*public function getAlim($Alim)
    {


        echo 'test2222';
        foreach ($Alim as $val) {
            echo '<option value="$val">$val</option> \n';
        }
    }*/

    public function getAlim(array &$id_alims_a_ignorer = array()) {

    require ("../pages/config.php");
      $sql = "select A.idAliment, A.LabelAliment, C.NomCategorie 
          from aliments A, categoriealiment c
          where A.CategorieAliment = C.idCategorie";
    
        try {
            $commande = $pdo->prepare($sql);
            $reussite_commande = $commande->execute();    
        }
        
        catch (PDOException $e) {
            echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
            die("STOP Catch Verif"); // On arrête tout.
        }
    
      $resultat = $commande->fetchAll(PDO::FETCH_ASSOC); //tableau d'enregistrements
     //var_dump($resultat);

    }
}
