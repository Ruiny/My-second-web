<?php
/**
 * Created by PhpStorm.
 * User: zeno
 * Date: 15/11/17
 * Time: 上午9:01
 */
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class MymailFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'MymailerServices';
    }

}