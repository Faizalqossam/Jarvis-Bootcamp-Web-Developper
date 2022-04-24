<?php
require 'Animal.php';
require 'Ape.php';
require 'Frog.php';

$sheep = new Animal("shaun");

echo "name : $sheep->name <br>";
echo "legs : $sheep->legs <br>";
echo "cold_blooded : $sheep->cold_blooded <br>";

echo "<br>";
$kodok = new Frog("buduk");

echo "name : $kodok->name <br>";
echo "legs : $kodok->legs <br>";
echo "cold_blooded : $kodok->cold_blooded <br>";
$kodok->jump();
echo "<br>";

echo "<br>";
$sungokong = new Ape("kera sakti");

echo "name : $sungokong->name <br>";
echo "legs : $sungokong->legs <br>";
echo "cold blooded : $sungokong->cold_blooded <br>";
$sungokong->yell();
