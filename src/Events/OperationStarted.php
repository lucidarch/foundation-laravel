<?php

namespace Lucid\Foundation\Events;

class OperationStarted
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $arguments;

    /**
     * OperationStarted constructor.
     * @param  string  $name
     * @param  array  $arguments
     */
    public function __construct($name, array $arguments = [])
    {
        $this->name = $name;
        $this->arguments = $arguments;
    }
}
