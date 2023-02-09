<?php

require __DIR__ .  '\classes-sql\Aliments.php';
require __DIR__ . '\..\interfaces\IAliment.php';

class Alim implements IAliment
{
    public function getAlim($Alim)
    {
        echo 'test2222';
        foreach ($Alim as $val) {
            echo '<option value="$val">$val</option> \n';
        }
    }
}
