<?php

class OrderController {

    static public function ctrShowOrders($item, $value) {

        $table = 'orders';
        $response = OrderModel::mdlShowOrders($table, $item, $value);
        return $response;
    }
}
