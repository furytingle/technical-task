<?php
declare(strict_types=1);

namespace Core\Interfaces;

interface AnimalInterface
{
    public function say() : string;

    public function eat(string $food) : string;
}