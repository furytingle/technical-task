<?php
declare(strict_types=1);

namespace Core\Interfaces;

interface CanRun extends CanWalk
{
    public function run() : void;
}