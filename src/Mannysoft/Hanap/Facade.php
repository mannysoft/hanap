<?php 

namespace Mannysoft\Hanap;

use Illuminate\Support\Facades\Facade;

class Facade extends Facade {
    /**
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hanap';
    }
}