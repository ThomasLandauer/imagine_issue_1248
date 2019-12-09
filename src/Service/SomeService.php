<?php

namespace App\Service;

use Liip\ImagineBundle\Imagine\Filter\FilterManager;

class SomeService
{
    private $filterManager;

    public function __construct(FilterManager $filterManager)
    {
        $this->filterManager = $filterManager;
    }
}
