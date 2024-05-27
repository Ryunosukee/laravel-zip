<?php

namespace dcorreah\Zip\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \dcorreah\Zip\Zip open($zip_file)
 * @method static \dcorreah\Zip\Zip create($zip_file, $overwrite = false)
 * @method static \dcorreah\Zip\Zip check($zip_file)
 */
class Zip extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dcorreah.zip';
    }
}
