<?php

$firstName = "Lucy"; // string
$luckyNumber = 7; // int
$price = 2.50; // float
$isDone = false; // Bool
$nothing = null; // null

echo "Hello $firstName, your lucky number is $luckyNumber.";


// ------------------------------
// Arrays
// ------------------------------

$nameList = ["Lara", "Jack", "Pascal"];
$name = array_shift($nameList);
array_unshift($nameList, "Lucy");

echo "<pre>";
print_r($nameList);
echo "</pre>";

// php 5.4 < older version 
$oldArray = array("Lara", "Jack", "Pascal"); 
$name = array_pop($oldArray);
array_push($oldArray, "Lucy");

echo "<pre>";
print_r($oldArray);
echo "</pre>";


// ------------------------------
// Objects
// ------------------------------

class Car {
    public $name = "Mercedes";
    public $model = "AMG One";

    // method
    public function set_new_name($newName){
        $this->name = $newName;
    }
    public function get_full_name(){
        return "$this->name $this->model";   
    }
}
        
echo "New Car: <br>";
$newCar = new Car();
echo $newCar->get_full_name();

echo "<br><br>";
echo "Renamed Car: <br>";
$newCar->set_new_name("BMW");
echo $newCar->get_full_name();

// ------------------------------
// Resources: References to external resources
// ------------------------------

$file = fopen("../src/scss/style.scss", "r");
$out = fread($file, 30); // read 30 bytes (characters)
echo "<pre>";
print($out);
echo "</pre>";
fclose($file);


// ------------------------------
// Control Structures
// ------------------------------
// if, else, elseif, switch, while, do-while, for, foreach

// ------------------------------
// if, else, elseif
// ------------------------------
$age = 18;

if($age < 18){
    echo "You are not allowed to drink alcohol.";
} elseif($age >= 18 && $age < 21){
    echo "You are allowed to drink beer.";
} else {
    echo "You are allowed to drink everything.";
}

// ------------------------------
// switch
// ------------------------------

$color = "red";

switch($color){
    case "red":
        echo "The color is red.";
        break;
    case "blue":
        echo "The color is blue.";
        break;
    default:
        echo "The color is not red or blue.";
}

// ------------------------------
// while
// ------------------------------
$counter = 0;

while($counter < 10){
    echo "Counter: $counter <br>";
    $counter++;
}

// ------------------------------
// do-while
// ------------------------------

$counter = 0;

do {
    echo "Counter: $counter <br>";
    $counter++;
} while($counter < 10);

// ------------------------------
// for
// ------------------------------
for($i = 0; $i < 10; $i++){
    echo "Counter: $i <br>";
}

// ------------------------------
// foreach
// ------------------------------

$names = ["Lucy", "Lara", "Jack"];

foreach($names as $name){
    echo "Name: $name <br>";
}


// ------------------------------
// Functions
// ------------------------------

function say_hello($name){
    echo "Hello $name";
}

say_hello("Lucy");

// ------------------------------
// include, require
// ------------------------------
// include: if file not found, continue
// require: if file not found, stop

// include("header.php");
// require("header.php");

// ------------------------------
// include_once, require_once
// ------------------------------
// include_once: if file not found, continue
// require_once: if file not found, stop

// include_once("header.php");
// require_once("header.php");

// ------------------------------
// $_GET, $_POST, $_REQUEST
// ------------------------------
// $_GET: get data from url
// $_POST: get data from form
// $_REQUEST: get data from url and form
// $_SERVER: get data from server

// echo $_GET["name"];
// echo $_POST["name"];
// echo $_REQUEST["name"];


