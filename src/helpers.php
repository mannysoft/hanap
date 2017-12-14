<?php

if (!function_exists('hanap')) {
    /**
     * Get the Debugbar instance
     *
     * @return \Barryvdh\Debugbar\LaravelDebugbar
     */
    function hanap()
    {
        return app(\Mannysoft\Hanap\Hanap::class);
    }
}

if (!function_exists('search')) {
    
    function search()
    {
        hanap()->search();
    }
}