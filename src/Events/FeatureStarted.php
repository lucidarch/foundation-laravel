<?php

namespace Lucid\Foundation\Events;

class FeatureStarted
{
    /**
     * @var string
     */
    public $name;

    /**
     * FeatureStarted constructor.
     * @param  string  $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}