<?php 
/*====================================
=            PRODUCTMODEL            =
====================================*/

class ProductModel{
/*----------  CREATEPRODUCT  ----------*/	
static public function mdlCreateProduct(){

}
/*----------  SHOWPRODUCT  ----------*/
static public function mdlShowProduct($table, $item, $value){
if($item != null) {
 $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item=:$item ");
 $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
 $stmt->execute();
 return $stmt->fetch();		
}
else{
 $stmt = Connection::Connect()->prepare("SELECT * FROM $table LIMIT 0,6");
 $stmt-> execute();
 return $stmt ->fetchAll();		

 }	
}	

/*----------  EDITPRODUCT  ----------*/
static public function mdlEditProduct(){
	
}
/*----------  DELETEPRODUCT  ----------*/

static public function mdlDeleteProduct(){
	
}
	

}

 ?>