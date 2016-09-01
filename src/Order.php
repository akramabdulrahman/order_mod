<?php
use Interfaces\OrderFromCartInterface;
use Interfaces\checkoutInterface;

/**
 * Created by PhpStorm.
 * User: akram-abdulrahman
 * Date: 8/30/16
 * Time: 6:21 PM
 */
class Order implements OrderFromCartInterface, checkoutInterface
{
    private $items,
        $status;

    public function __construct(Array $items = [], String $status = StatusTypes::PENDING)
    {
        $this->items = $items;
        $this->status = $status;

    }

    public function addItems(Array $items)
    {
        $this->items = array_merge($this->items, $items);
    }

    public function addItem(Item $item)
    {
        $this->items[] = $item;
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

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(String $type)
    {
        return $this->status = $type;
    }

    public function checkout()
    {
        // TODO: Implement checkout() method.
    }
}