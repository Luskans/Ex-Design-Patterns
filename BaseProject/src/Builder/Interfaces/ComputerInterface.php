<?php

namespace App\Builder\Interfaces;

use App\Builder\Hardware\AbstractPart;

interface ComputerInterface
{
    public function getComponent(string $part);
}