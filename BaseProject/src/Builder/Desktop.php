<?php

namespace App\Builder;

use App\Builder\Hardware\AbstractPart;
use App\Builder\Interfaces\ComputerInterface;

class Desktop implements ComputerInterface
{
    private $components;

    public function __construct(array $part)
    {
        $this->components = $part;
    }

    public function getComponent(string $part)
    {
        foreach ($this->components as $component) {
            if (get_class($component) === $part) {
                return $component;
            }
        }
        return null;
    }
}