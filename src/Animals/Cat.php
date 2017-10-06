<?php

namespace Core\Animals;

use Core\Interfaces\CanRun;

class Cat extends Animal implements CanRun
{
    use \Core\Traits\CanRun;

    protected $nutrition = [
        'fish', 'meat'
    ];
}