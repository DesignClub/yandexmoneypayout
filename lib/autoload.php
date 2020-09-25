<?php
/**
 * User: shnell
 * Date: 25.04.16
 * Time: 19:33
 */

function yandexmoneypayoutClass($className)
{
    $parts = explode( '\\', $className );

    require __FILE__.'/'.implode('/', array_slice($parts, 1)) . '.php';
    /*if ( $parts[ 0 ] == 'YandexMoney' )
    {
    }*/
}

spl_autoload_register('yandexmoneypayoutClass');