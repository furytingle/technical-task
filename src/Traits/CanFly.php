<?php
declare(strict_types=1);

namespace Core\Traits;

trait CanFly
{
    public function fly() : string
    {
        return $this->name . ' flies';
    }
}