<?php

class Fruit
{

    public $name;
    public $amount;
    public $unit;
    public $price;


    public function __construct($name, $amount, $unit, $price)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->unit = $unit;
        $this->price = $price;
    }





}