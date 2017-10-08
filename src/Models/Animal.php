<?php
declare(strict_types=1);

namespace Core\Models;

use Core\Interfaces\AnimalInterface;

class Animal implements AnimalInterface
{
    protected $name = 'anonymous ' . __CLASS__;
    protected $nutrition = [];
    protected $sound = 'nothing';

    public function setName($name) : void
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function eat(string $food = 'empty') : string
    {
        if (in_array(strtolower($food), $this->nutrition)) {
            return 'OM NOM NOM';
        }

        return $this->getName() . ' does not like ' . $food;
    }

    public function say() : string
    {
        return $this->getName() . ' says ' . $this->sound;
    }
}