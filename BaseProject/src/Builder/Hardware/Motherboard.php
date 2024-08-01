<?php

namespace App\Builder\Hardware;

class Motherboard extends AbstractPart
{
    public function __construct($chipset)
    {
        parent::__construct($chipset);
    }
}