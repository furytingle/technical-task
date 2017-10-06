<?php
declare(strict_types=1);

namespace Core\Animals;

class Animal
{
    protected $name = 'anonymous ' . __CLASS__;
    protected $nutrition = [];

    public function setName($name) : void
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function eat($food) : string
    {
        if (in_array(strtolower($food), $this->nutrition)) {
            return 'OM NOM NOM';
        }

        return $this->getName() . ' does not like ' . $food . '\n';
    }
}