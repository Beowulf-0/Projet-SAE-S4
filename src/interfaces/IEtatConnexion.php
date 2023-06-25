<?php

interface IEtatConnexion
{
    public function estConnecte(): bool;
    public function estDeconnecte(): bool;
}
