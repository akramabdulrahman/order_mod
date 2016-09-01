<?php

/**
 * Created by PhpStorm.
 * User: akram-abdulrahman
 * Date: 8/30/16
 * Time: 6:26 PM
 */
class OrderFactory
{
    public static function build(Cart $cart)
    {
        return new Order($cart->getItems());
    }
}