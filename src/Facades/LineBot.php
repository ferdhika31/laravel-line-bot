<?php
namespace Ferdhika31\LaravelLineBot\Facades;

use Illuminate\Support\Facades\Facade;

class LineBot extends Facade{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'linebot';
    }
}