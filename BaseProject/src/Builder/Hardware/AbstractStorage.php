<?php

namespace App\Builder\Hardware;

abstract class AbstractStorage extends AbstractPart
{
    public function __construct($volume)
    {
        parent::__construct($volume);
    }
}