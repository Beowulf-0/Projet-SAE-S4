<?php

require_once __DIR__ . '/IDonnesEnvoyables.php';

interface IFormulaire
{
    public function getFormulaire(): string;
}