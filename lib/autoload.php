<?php
/**
 * User: shnell
 * Date: 25.04.16
 * Time: 19:33
 */

define('YANDEX_MONEY_PAY_ROOT_PATH', dirname(__FILE__));

function yandexMoneyPayOutClass($className)
{
    if (strncmp('YandexMoneyPayOut', $className, 14) === 0) {
        $path   = YANDEX_MONEY_PAY_ROOT_PATH;
        $length = 14;
    } else {
        return;
    }
    $path .= str_replace('\\', '/', substr($className, $length)) . '.php';
    if (file_exists($path)) {
        require $path;
    }
}

spl_autoload_register('yandexMoneyPayOutClass');
