<?php

require_once './vendor/autoload.php';

$cat = new \Core\Models\Cat();
$cat->setName('Osvaldo');

$dog = new \Core\Models\Dog();
$dog->setName('Leopold');

$bird = new \Core\Models\Bird();
$bird->setName('Jimmy');

$rat = new \Core\Models\Rat();
$rat->setName('Bob');

$zoo = new \Core\Zoo();
$zoo->addAnimals($cat, $dog, $bird, $rat);

$info = $zoo->getAnimalsInfo();

\Core\Helpers\OutputHelper::printInfo($info);

echo $bird->say() . PHP_EOL;

$zoo->index();