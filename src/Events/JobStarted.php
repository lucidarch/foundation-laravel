<?php

namespace Lucid\Foundation\Events;

class JobStarted
{
    /**
     * @var string
     */
    public $name;

    /**
     * JobStarted constructor.
     * @param  string  $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}