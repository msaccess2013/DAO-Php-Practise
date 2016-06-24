<?php

require_once __DIR__ . "/../dao/Fruit.php";
require_once __DIR__ . "/../dao/FruitList.php";

$fruitListA = new Fruit("มะละกอ", 3, "ลูก", 30);
$fruitListB = new Fruit("กล้วย", 1, "หวี", 45);
$fruitListC = new Fruit("ส้ม", 2, "กก", 20);




// ข้อแตกต่างจาก JAVA คือ JAVA จะประกาศเป็น List<Fruit> fruitArr = new ArrayList();
$fruitArr = array();
for($i = 0; $i < 10; $i++){
    $fruitArr[$i] = new Fruit("กล้วย", 2, "หวี", 30);
}
//$fruitArr = array($fruitListA, $fruitListB, $fruitListC);


$fruits = new FruitList($fruitArr);


//echo $fruits->fruits[0]->name; มะละกอ

foreach ($fruits->fruits as $value) {

    echo $value->name . ' ';
    echo $value->amount . ' ';
    echo $value->unit . ' ';
    echo $value->price . '</br>';
}

