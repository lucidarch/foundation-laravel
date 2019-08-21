<?php

namespace Lucid\Foundation\Events;

class OperationStarted
{
    /**
     * @var string
     */
    public $name;

    /**
     * OperationStarted constructor.
     * @param  string  $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}