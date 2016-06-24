<?php

require_once __DIR__ . "/../dao/Fruit.php";
require_once __DIR__ . "/../dao/FruitList.php";

class FruitListManager{

    private $fruitListItem;

    public function __construct()
    {

        $this->addFruitListDao();

    }

    public function addFruitListDao(){

        $myFruitList = array();

        $myFruitList[] = new Fruit("มะละกอ", 3, "ลูก", 30);
        $myFruitList[] = new Fruit("กล้วย", 1, "หวี", 45);
        $myFruitList[] = new Fruit("ส้ม", 2, "กก", 20);

        $this->fruitListItem = new FruitList($myFruitList);



    }

    public function getFruitListItem()
    {
        return $this->fruitListItem;
    }



}