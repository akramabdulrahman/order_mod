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
    function items_array_can_be_initialized_using_constructor()
    {
        $order= new Order([new Item(),new Item(),new Item()]);
        self::assertNotEmpty($order->getItems());
        self::assertSameSize([new Item(),new Item(),new Item()],$order->getItems());
        self::assertEquals(3,$order->getItemsCount());

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
    function status_default_val_is_PENDING(){
        $order = new Order();
        self::assertEquals(StatusTypes::PENDING,$order->getStatus());
    }

    /** @test */
    function status_is_editable(){
        $order = new Order();
        self::assertEquals(StatusTypes::PENDING,$order->getStatus());
        $order->setStatus(StatusTypes::REFUND);
        self::assertEquals(StatusTypes::REFUND,$order->getStatus());
        self::assertEquals($order->setStatus(StatusTypes::REFUND),$order->getStatus());

    }

    /** @test */
    function Cart_can_be_converted_to_order(){
        $order = OrderFactory::build(new Cart([new Item(),new Item(),new Item()]));

        $order->checkout();
    }



}
