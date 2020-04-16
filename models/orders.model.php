<?php

require_once 'connection.php';

class OrderModel
{
   static public function mdlShowOrders($table, $item, $value) {
        if ($item != null && $value != null) {
            $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
            $stmt->bindParam(":".$item, $value);
            $stmt->execute();

            return $stmt->fetchAll();
        } else {
            $stmt = Connection::connect()->prepare("SELECT * FROM $table");
            $stmt->execute();

            return $stmt->fetchAll();
        }

    }
}
