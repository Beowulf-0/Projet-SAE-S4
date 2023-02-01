<?php

// Faire une fonction qui permet de vérifier que les données sont envoyables

interface IDonneesEnvoyables
{
    public function estEnvoyable(array $data): bool;
}

