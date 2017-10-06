<?php

require_once './vendor/autoload.php';

$cat = new \Core\Animals\Cat();
$cat->setName('Osvaldo');

$cat->eat('MEAT');