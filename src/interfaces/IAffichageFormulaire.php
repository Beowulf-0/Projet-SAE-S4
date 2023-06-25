<?php

interface IAffichageFormulaire
{
    public function getFormulaireCreationCompte();

    public function getFormulaireLogin();

    public function getFormulaireModifMail();

    public function getFormulaireModifPassword();

    public function getFormulaireSuppressionCompte();

    public function getSondage();

    public function getPresentationResultats();
}