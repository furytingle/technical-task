<?php

namespace Core\Interfaces;

interface CanBite
{
    public function bite(string $target = 'no one') : string;
}