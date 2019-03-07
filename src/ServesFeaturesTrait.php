<?php

namespace Lucid\Foundation;

use Illuminate\Support\Collection;
use Illuminate\Foundation\Bus\DispatchesJobs;

trait ServesFeaturesTrait
{
    use MarshalTrait;
    use DispatchesJobs;

    /**
     * Serve the given feature with the given arguments.
     *
     * @param string $feature
     * @param array  $arguments
     *
     * @return mixed
     */
    public function serve($feature, $arguments = [])
    {
        if (!is_object($feature)) {
            return $this->dispatch($this->marshal($feature, new Collection(), $arguments));
        } else {
            return $this->dispatch($feature, $arguments);
        }
    }
}
