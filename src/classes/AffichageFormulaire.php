<?php

class AffichageFormulaire implements IAffichageFormulaire
{

        public function getFormulaireCreationCompte(){
            include '../forms/formulaire_creation_compte.php';
        }

        public function getFormulaireLogin(){
            include '../forms/formulaire_login.php';
        }

        public function getFormulaireModifMail(){
            include '../forms/formulaire_modif_mail.php';
        }

        public function getFormulaireModifPassword(){
            include '../forms/formulaire_modif_mdp.php';
        }

        public function getFormulaireSuppressionCompte(){
            include '../forms/formulaire_suppression_compte.php';
        }

        public function getSondage(){
            include '../forms/formulaire_sondage.php';
        }

        public function getPresentationResultats()
        {
            include '../forms/presentation_resultats.php';
        }
}