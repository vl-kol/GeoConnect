<?php
/**
 * Created by PhpStorm.
 * User: vkolesnikov
 * Date: 30.01.2018
 * Time: 10:53
 */

class Cart
{
    public static function addProduct($id) {

        $id = intval($id);

        $productInCart = [];

        if(isset($_SESSION['products'])) {
            $productInCart = $_SESSION['products'];
        }

        if(array_key_exists($id, $productInCart)) {
            $productInCart[$id] ++;
        } else {
            $productInCart[$id] = 1;
        }

        $_SESSION['products'] = $productInCart;

        return self::countItems();
    }

    public static function countItems() {

        if(isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts() {
        if(isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products) {

        $productsInCart = self::getProducts();

        $total = 0;

        if($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }

    public static function clear() {
        if(isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

    public static function deleteProduct($id) {

        if(isset($_SESSION['products'][$id])) {
            unset($_SESSION['products'][$id]);
        }
    }
}