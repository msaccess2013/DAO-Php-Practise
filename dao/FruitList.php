<?php

class FruitList{


        public $basket;
        public $fruits = array();

    public function __construct(array $fruits)
    {
        $this->fruits = $fruits;
    }




}