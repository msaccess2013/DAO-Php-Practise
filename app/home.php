<?php



require_once __DIR__ . "/../manager/FruitListManager.php";


$fruits = new FruitListManager();


$dao = $fruits->getFruitListItem()->fruits;


foreach ($dao as $value) {

    echo $value->name . ' ';
    echo $value->amount . ' ';
    echo $value->unit . ' ';
    echo $value->price . '</br>';
}

