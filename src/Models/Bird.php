<?php

namespace Core\Models;

use Core\Interfaces\CanFly;
use Core\Interfaces\CanWalk;

class Bird extends Animal implements CanFly, CanWalk
{
    use \Core\Traits\CanFly,
        \Core\Traits\CanWalk;

    protected $nutrition = ['seed', 'worm'];

    protected $sound = 'tweet';
}