<?php


namespace App\Examples;


class Direct implements Payemnt
{
    private $ship_cost;
    public function __construct($cost)
    {
        $this->ship_cost = $cost;
    }


    public function pay()
    {
        dd("pay by Direct payment .:. cost = ".$this->ship_cost);
    }
}
