<?php

namespace App\Builder\Hardware;

class Ssd extends AbstractStorage
{
    public function __construct($volume)
    {
        parent::__construct($volume);
    }
}