<?php

namespace Lucid\Foundation;

use Illuminate\Foundation\Bus\DispatchesJobs;

abstract class Operation
{
    use MarshalTrait;
    use DispatchesJobs;
    use JobDispatcherTrait;
}
