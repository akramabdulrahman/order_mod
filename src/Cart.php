<?php

/**
 * Created by PhpStorm.
 * User: akram-abdulrahman
 * Date: 8/30/16
 * Time: 6:26 PM
 */
abstract class Cart implements CartToOrderInterface
{
    public $items;

    public function getItems()
    {
        return $this->items;
    }
}