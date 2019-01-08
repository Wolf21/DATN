<?php

namespace App\Services;
use Cart;

class CartService
{

    /**
     * @param $product
     */
    public static function addCart($product)
    {
        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['img' => $product->images]
        ];
        Cart::add($data);
    }
}