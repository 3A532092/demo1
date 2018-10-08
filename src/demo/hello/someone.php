<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/8
 * Time: 下午 09:16
 */
namespace demo\hello;

class Someone
{
    function __construct($name)
    {
        echo 'Hello '.$name.PHP_EOL;
    }
}