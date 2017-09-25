<?php
/**
 * Created by PhpStorm.
 * User: vital
 * Date: 2017/9/25
 * Time: 15:20
 */

namespace Vital\Jpush\Facades;


use Illuminate\Support\Facades\Facade;

class JpushFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'jpush';
    }
}