<?php 
require_once "connection.php";

/**
 * ADDCART MODEL
 */
class ModelCart{
/*----------  Add cart  ----------*/	
static public function	mdlAddCart($table,$data){
$stmt = Connection::connect()->prepare("INSERT INTO $table (ct_p_id, ct_qty, ct_c_id, ct_time) VALUES(:ct_p_id, :ct_qty, :ct_c_id, :ct_time)");
$stmt->bindParam(":ct_p_id",$data["ct_p_id"]);
$stmt->bindParam(":ct_qty",$data["ct_qty"]);
$stmt->bindParam(":ct_c_id",$data["ct_c_id"]);
$stmt->bindParam(":ct_time",$data["ct_time"]);

if($stmt->execute()) {
	return "ok";
	}else{
		return "error";
	}	
}
/*----------show Cart----------*/
static public function mdlShowCart($table, $item, $value){
if ($item != null) {
$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
 $stmt->bindParam(":".$item, $value);
 $stmt->execute();
 return $stmt->fetch();	
}else{
$stmt = Connection::connect()->prepare("SELECT * FROM $table");
 $stmt-> execute();
 return $stmt ->fetchAll();	
}

}

}//class ends

 ?>