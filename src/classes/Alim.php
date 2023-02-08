<?php

require_once('../interfaces/IAliment.php');

class Alim implements IAliment
{
    public function getAlim(array $Alim)
    {
        echo 'test2222';
        foreach($Alim as $val)
        {
            echo '<option value="$val">$val</option> \n';
        }
    }
}