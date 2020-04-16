<?php

require_once 'connection.php';

class UserModel
{
    public function mdlShowUsers($table, $item, $value) {
        if ($item != null) {
            $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
            $stmt->bindParam(":".$item, $value, PDO::PARAM_STR_CHAR);
            $stmt->execute();

            return $stmt->fetch();
        } else {
            $stmt = Connection::connect()->prepare("SELECT * FROM $table");
            $stmt->execute();
            return $stmt->fetchAll();
        }

    }

    public function mdlAddUser($table, $data) {
        $stmt = Connection::connect()->prepare("INSERT INTO $table (c_name, c_email, c_password, c_image, c_gender, c_location) 
                            VALUES (:c_name, :c_email, :c_password, :c_image, :c_gender, :c_location)");
        $stmt->bindParam(":c_name", $data['c_name'], PDO::PARAM_STR);
        $stmt->bindParam(":c_email", $data['c_email'], PDO::PARAM_STR);
        $stmt->bindParam(":c_password", $data['c_password'], PDO::PARAM_STR);
        $stmt->bindParam(":c_image", $data['c_image'], PDO::PARAM_STR);
        $stmt->bindParam(":c_gender", $data['c_gender'], PDO::PARAM_STR);
        $stmt->bindParam(":c_location", $data['c_location'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

}
