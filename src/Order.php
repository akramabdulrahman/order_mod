<?php
use Interfaces\OrderFromCartInterface;
/**
 * Created by PhpStorm.
 * User: akram-abdulrahman
 * Date: 8/30/16
 * Time: 6:21 PM
 */

class Order implements  OrderFromCartInterface
{
    private $items,
            $status;

    public function __construct($items=[])
    {
        $this->items=$items;
    }

    public function addItems(Array $items)
    {
        $this->items = array_merge($this->items,$items);
    }

    public function addItem(Item $item)
    {
        $this->items[]=$item;
    }

    public function DeleteItem(int $id)
    {

    }

    public function DeleteItems(Array $items)
    {

    }

    public function getItemsCount()
    {
        return count($this->items);
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getItem(int $id)
    {

    }
}