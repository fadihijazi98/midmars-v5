<?php


namespace App\Examples;


class Credit implements Payemnt
{
    private $ship_cost;
    public function __construct($cost)
    {
         $this->ship_cost = $cost;
    }

    public function pay()
    {
        dd("pay by Credit card .:. cost = ".$this->ship_cost);
    }
}
