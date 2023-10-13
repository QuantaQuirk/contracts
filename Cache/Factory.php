<?php

namespace QuantaQuirk\Contracts\Cache;

interface Factory
{
    /**
     * Get a cache store instance by name.
     *
     * @param  string|null  $name
     * @return \QuantaQuirk\Contracts\Cache\Repository
     */
    public function store($name = null);
}
