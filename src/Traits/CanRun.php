<?php
declare(strict_types=1);

namespace Core\Traits;

trait CanRun
{
    public function run() : string
    {
        return $this->name . ' runs';
    }
}