<?php
/**
 * Created by PhpStorm.
 * User: akram-abdulrahman
 * Date: 8/31/16
 * Time: 3:29 PM
 */
class OrderTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    function get_items_count_returns_zero_by_default()
    {
        $order= new Order();
        self::assertEquals(0,$order->getItemsCount());
    }

    /** @test */
    function items_array_empty_by_default()
    {
        $order= new Order();
        self::assertEmpty($order->getItems());
    }

    /** @test */
    function add_item_to_items_array_increase_size_by_1()
    {
        $order= new Order();
        self::assertEquals(0,$order->getItemsCount());
        $order->addItem(new Item());
        self::assertEquals(1,$order->getItemsCount());
    }

    /** @test */
    function add_items_to_items_array_increase_size_by_other_array_size()
    {
        $order= new Order();
        self::assertEquals(0,$order->getItemsCount());
        $order->addItems([new Item(),new Item(),new Item(),new Item(),new Item(),new Item()]);
        self::assertEquals(6,$order->getItemsCount());
        $order->addItems([new Item(),new Item(),new Item(),new Item(),new Item(),new Item()]);
        self::assertEquals(12,$order->getItemsCount());
    }

    /** @test */
    function delete_item_from_items_array_decrease_its_size_by_1_or_returns_false()
    {

    }

    /** @test */
    function delete_items_from_items_array_decrease_its_size_by_other_array_existing_elements_count()
    {

    }

}
