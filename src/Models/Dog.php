<?php
declare(strict_types=1);

namespace Core\Models;

use Core\Interfaces\CanBite;
use Core\Interfaces\CanRun;
use Core\Interfaces\CanWalk;

class Dog extends Animal implements CanWalk, CanRun, CanBite
{
    use \Core\Traits\CanWalk,
        \Core\Traits\CanBite,
        \Core\Traits\CanRun;

    protected $nutrition = ['meat'];
    protected $sound = 'wouf';
}