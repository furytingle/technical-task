<?php
declare(strict_types=1);

namespace Core\Interfaces;

interface CanRun
{
    public function run() : string;
}