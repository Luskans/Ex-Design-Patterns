<?php

namespace App\Builder\Hardware;

class Hdd extends AbstractStorage
{
    public function __construct($volume)
    {
        parent::__construct($volume);
    }
}