<?php

namespace App\Builder\Hardware;

abstract class AbstractProcessor extends AbstractPart
{
    public function __construct($processor)
    {
        parent::__construct($processor);
    }
}