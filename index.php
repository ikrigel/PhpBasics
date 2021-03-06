<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<!--     
    <nav>
        <a href="index.php">Home</a>
        <span> | </span>
        <a href="about.php">About</a>
        <span> | </span>
        <a href="programmer.php">Programmer</a>
    </nav> -->

    <h1>PHP Basics Page</h1>

    <hr>
<?php

//Output
echo "Hello PHP!<br>";
//Variables
$x=10;
$y=20;
 $z=$x+$y;
echo "z=$z,=x=$x,y = +$y<br>"; //Interpolation
echo "x=" . $x . "y,=" .$y ."<br>"; //Concatenation

//Types
$x=10; //number
echo $x . "&rarr;" . gettype($x) . "<br>";
$y = 10.5; //double
echo $y . "&rarr;" . gettype($y) . "<br>";
$z = "Hello"; //string
echo $z . "&rarr;" . gettype($z) . "<br>";
$w = true; //boolean
echo $w . "&rarr;" . gettype($w) . "<br>";
//Input
//Input from the user needs some form sending the data (we'll see soon)

//Operators
//Same as JavaScript
$a=10;
$b=2;
$pow=$a**$b;
echo $pow . "&rarr;" . gettype($pow) . "<br>";

//Conditions
//if-else - as JavaScript
//SWITCH-CASE - as JavaScript
//Ternary operator - as JavaScript

//Loops
//while - as JavaScript
//do-while - as JavaScript
//for - as JavaScript
//foreach - different from JavaScript

//Literal Objects {}
$cat = new stdClass();
$cat->name = "Fluffy";
$cat->age = 3;
$cat->color = "White";
echo $cat->name ."<br>";
print_r($cat) . "<br>";
echo "<br>";
//Arrays
$arr = [10,20,"Hello",true,30];
$arr[] = 40;//add to the end of the array - push

for($i=0;$i<count($arr);$i++){
    echo $arr[$i] . " | ";
}
echo "<br>";
foreach($arr as $item){
    echo $item . " | ";
}
echo "<br>";

$arr2 = ["sky"=>"blue","grass"=>"green","sun"=>"yellow", "earth"=>"brown", "moon"=>"white", "stars"=>"black","wine"=>"red"];
echo $arr2["sky"] . "<br>";
echo $arr2["grass"] . "<br>";

foreach ($arr2 as $key => $value){
    echo $key . "&rarr;" . $value . " | ";
}
echo "<br>";
//Functions
function sayHi(){
    echo "Hi!<br>";
}
sayHi();
echo "<br>";

function getAverage($x,$y,$z){
    $average = ($x+$y+$z)/3;
    return $average;
}

echo "Average is " . getAverage(10,20,30) . "<br>";

//Misc
// include "./calc.php";
// include_once    "./calc.php";
// require "./calc.php";
require_once "./calc.php";

echo "Sum: " . sum(10,25) . "<br>";
echo "Sum: " . sum(10,25) . "<br>";
echo "Sum: " . sum(10,30) . "<br>";
echo "Sum: " . sum(10,100) . "<br>";
echo "Sum: " . sum(10,200) . "<br><br>";

echo "PHP Basics + OOP" . "<br>";
echo "-----------------" . "<br><br>";
echo  "1.	?????? ???????? ?????????????? ???????? ???? ???? ?????????????? ?????????????????? ?????? 1 ??-1000." . "<br>";
echo  "?????????? ???? ?????????? ??????." . "<br>";
echo  "?????????? ???? ?????????? ????." . "<br>";
echo  "?????????? ???? ???????????? ??????." . "<br>";
echo  " ???? ???????? ???? ?????????????? ?????? ?????????? ????????." . "<br>";
echo "??-index.php ???? ?????????? ?????? ?????????????????? ???????????? ?????? ???????? ?????? ??????????." . "<br><br>";


echo  "???????????? ????" . "<br>";

echo "HW 22.3.22 Solution: &rarr;???????????????? &larr; <br>";
echo "<hr><br>";
$number=1000;
$arr3=getPrimeNumbers($number) ;
"<br>";

echo "Prime Numbers in " . $number . " : <br> ";
echo printArray($arr3) . "<br>";
echo "Array Sum: " . sumArr($arr3) . "<br>";
echo "Array Average: " . averageArr($arr3) . "<br>";
echo "Number of elements in the Array: " . count($arr3) . "<br>";

echo "<hr><br>";
echo "HW 22.3.22 Solution &rarr;????????????????&larr;<br>";
?>
    <hr>

</body>
</html>