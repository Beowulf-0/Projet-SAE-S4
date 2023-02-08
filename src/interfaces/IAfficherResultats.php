<?php

interface IAfficherResultats
{
    public function getCamembertCategorieAliment(Aliments $tableAliment, Sonde $tableSonde);
    public function getCamembertAgeSondes(Sonde $tableSonde);
}