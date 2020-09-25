<?php
/**
 * User: shnell
 * Date: 26.04.16
 * Time: 18:36
 */

namespace YandexMoneyPayOut\interfaces;


interface IXMLTransformable {
    public function asXml();
    public function toXml();
}