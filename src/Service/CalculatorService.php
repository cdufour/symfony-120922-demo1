<?php

namespace App\Service;

class CalculatorService
{
    private $taux;

    public function __construct($taux = 0.2)
    {
        $this->taux = $taux;
    }

    public function square(int $x)
    {
        return $x * $x;
    }

    public function tva($ht)
    {
        $ttc = $ht + ($ht * $this->taux);
        return $ttc;
    }
}