<?php
declare(strict_types=1);

namespace Core\Traits;

trait CanWalk
{
    public function walk() : string
    {
        return $this->name . ' walks';
    }
}