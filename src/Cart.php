<?php
use Interfaces\CartToOrderInterface;
/**
 * Created by PhpStorm.
 * User: akram-abdulrahman
 * Date: 8/30/16
 * Time: 6:26 PM
 */
class Cart implements CartToOrderInterface
{
    private $items;

    public function __construct(Array $items)
    {
        $this->items=$items;
    }

    public function getItems()
    {
        return $this->items;
    }
}