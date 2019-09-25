<?php
/**
 * Created by PhpStorm.
 * User: ljx
 * Date: 2019/9/24
 * Time: 6:32 PM
 */

function route_class()
{
    return str_replace('.','-',Route::currentRouteName());
}