<?php
/**
 * User: shnell
 * Date: 25.04.16
 * Time: 18:35
 */

namespace YandexMoneyPayOut\interfaces;


use YandexMoneyPayOut\BalanceRequestParams;
use YandexMoneyPayOut\DepositionRequestParams;

interface IPayoutAPI
{
    public function makeDeposition( DepositionRequestParams $params );

    public function testDeposition( DepositionRequestParams $params );

    public function getBalance( BalanceRequestParams $params );

    public function errorDepositionNotification( $handler );
} 