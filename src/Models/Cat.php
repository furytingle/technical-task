<?php
declare(strict_types=1);

namespace Core\Models;

use Core\Interfaces\CanRun;
use Core\Interfaces\CanBite;
use Core\Interfaces\CanWalk;

class Cat extends Animal implements CanWalk, CanRun, CanBite
{
    use \Core\Traits\CanWalk,
        \Core\Traits\CanRun,
        \Core\Traits\CanBite;

    protected $nutrition = [
        'fish', 'meat'
    ];

    protected $sound = 'meow';
}