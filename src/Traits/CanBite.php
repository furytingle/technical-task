<?php

namespace Core\Traits;

trait CanBite
{
    public function bite(string $target = 'no one') : string
    {
        return $this->name . ' bites ' . $target;
    }
}