<?php
declare(strict_types=1);

namespace Core;

use Core\Models\Animal;

class Zoo
{
    protected $animals = [];

    public function addAnimals(...$animals) : void
    {
        foreach ($animals as $animal) {
            $this->addAnimal($animal);
        }
    }

    public function addAnimal(Animal $animal) : void
    {
        $this->animals[] = $animal;
    }

    public function getAnimals() : array
    {
        $output = [];

        foreach ($this->animals as $animal) {
            /* @var $animal \Core\Models\Animal */
            $output[get_class($animal)][] = $animal->getName();
        }

        return $output;
    }

    public function getAnimalsInfo() : array
    {
        $output = [];

        foreach ($this->animals as $animal) {
            $methods = [];
            $interfaces = class_implements($animal);

            foreach ($interfaces as $interface) {
                $methods = array_merge($methods, get_class_methods($interface));
            }

            /* @var $animal \Core\Models\Animal */
            $output[$animal->getName()] = array_unique($methods);
        }

        return $output;
    }

    public function index() : void
    {
        foreach ($this->animals as $animal) {

            $interfaces = class_implements($animal);

            /* @var $animal \Core\Models\Animal */
            echo $animal->getName() . PHP_EOL;
            foreach ($interfaces as $interface) {
                $methods = get_class_methods($interface);

                foreach ($methods as $method) {
                    echo str_repeat(" ", 4);
                    echo $animal->$method() . PHP_EOL;
                }
            }
        }
    }
}