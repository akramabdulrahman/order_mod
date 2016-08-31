<?php

/**
 * Created by PhpStorm.
 * User: akram-abdulrahman
 * Date: 8/30/16
 * Time: 6:26 PM
 */
class OrderFactory
{
    public function build(Cart $cart)
    {
        $order = new Order();
        $order->addItems();
        return $order;
    }
}