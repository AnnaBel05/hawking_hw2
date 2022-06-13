<?php

namespace Controllers;

use Services\GuzzleService;

class ConverterController
{
    private $guzzleService;

    public function __construct()
    {
        $this->guzzleService = new GuzzleService();
    }

    public function UsdToRub() 
    {
        $this->__construct;
        $data = $this->guzzleService->getRates();
        $usd = $data->Valute->USD->Value;
        return $usd;
    }

    public function RubToUsd()
    {
        $this->__construct;
        $data = $this->guzzleService->getRates();
        $rub = $data->Valute->RUB->Value;
        return $rub;
    }
}

?>