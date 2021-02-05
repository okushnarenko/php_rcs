<?php

$someNumber = 123; //integer
$someFloat = 3.14; //float
$someText = 'foo 
bar 
baz'; //string
$someText2 = "foo bar baz";
$someTrue = true; //bool
$someNothing = null;

$someNumber = 321;

$someCars = ['zaz', 'gaz', 'uaz', 'vaz', 'maz', 'bmw']; //array
// $someCars = array (1, 2, 3); <-- slikts stils
echo $someCars [2] . '<br>'; //print + . '<br>' <-- konkatinācija caur punktu plusa vietā
echo $someCars [5] . '<br>';

$person = [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 21,
];
// var_dump($person); 

echo $person['name'] . '<br>';

$foo = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

echo $foo[2][1] . '<br>';

$people = [
    [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 21,
    ],
    [
    'name' => 'Jane',
    'surname' => 'Doe',
    'age' => 25,
    ],
];

echo $people[1]['surname'] . '<br>';

// +
// -
// /
// *
// %

// 1 + '1' = '11'   JS
// 1 + '1' = 2      PHP

// ==
// !=
// >
// <
// >=
// <=

// !==
// ===

// if(true){

// } elseif(){
    
// }else{

// };

// $variable = 'foo';
// switch($variable) {
//     case 'foo':
//         //something
//         break;
//     default:
//         //something
//         break;
// };

// while (false) {
//     //something
// };

// do{
//     //something
// }while(false){

//     for($i = 0 ; $i < 10; $i++){
//         echo $i . '<br>';
//     }
// };

// for($i = 0; $i < 50; $i++){
//     if($i % 2 == 0 && $i % 3 == 0){
//         echo 'fizz bazz' . '<br>';
//     }elseif($i % 2 == 0){
//         echo 'fizz' . '<br>';
//     }elseif($i % 3 == 0){
//         echo 'bazz' . '<br>';
//     }else{
//         echo $i . '<br>';
//     };
// };

$cars = [5 => 'vaz', 6 => 'gaz', 8 => 'uaz', 10 => 'zaz'];

foreach ($cars as $key => $car) {
    echo $key . ' = '. $car . '<br>';
};

echo strrev('Foo') . '<br>';
echo str_repeat ('ab', 10) . '<br>';
echo array_key_exists(6, $cars) . '<br>'; // 1- true; ' ' - false;

$emails = 'foo@bar.com,baz@something.net';
$emailArray = explode(',', $emails);
var_dump($emailArray);
echo '<br>';
echo implode(',', $emailArray) . '<br>';

function add($num1, $num2 = 5)
{
    return $num1 + $num2;
};

echo add(1, 10) . '<br>';
echo add(1) . '<br>';
//echo add('asdf') . '<br>';

function dd($attr) {
    echo '<pre>';
    var_dump($attr);
    die;
}

class Animal
{
    private $name;
    protected $energy = 10;
    public static $animalCount;

    public function __construct(string $animalName)
    {
        $this->name = $animalName;
        self::$animalCount +=1;
    }
    public function run() 
    {
        $this->energy -= 1;
    }
    public function sleep() 
    {
        $this->energy += 1;
    }
}

class Cat extends Animal implements CanEat
{
    public function sleep()
    {
        $this->energy +=2;
    }
    public function eat()
    {
        $this->energy += 1;
    }
}

interface CanEat
{
    public function eat();
}

//$muris->name = 'Muris';  //muris.name = 'Muris'; (JS)

$muris = new Cat('Muris');
$muris->run();
$muris->run();
$muris->run();
$muris->run();

$puka = new Cat('Puka');
$puka->sleep();
$puka->sleep();
$puka->sleep();

dd($puka::$animalCount);