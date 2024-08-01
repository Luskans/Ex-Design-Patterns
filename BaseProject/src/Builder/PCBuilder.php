<?php

namespace App\Builder;

use App\Builder\Hardware\AbstractPart;
use App\Builder\Interfaces\BuilderInterface;
use App\Builder\Interfaces\ComputerInterface;

class PCBuilder implements BuilderInterface
{
    private $components = [];

    public function getComputer(): ComputerInterface
    {
        return new Desktop($this->components);
    }

    public function setPart(AbstractPart $part): self
    {
        $this->components[] = $part;
        return $this;
        // $this->components[get_class($part)] = $part;
    }
}