<?php 
/*=======================================================
=            CONTROLLER FOR PRODUCT/SERVICES            =
=======================================================*/

class ProductController{
/*----------  function AddProduct  ----------*/
static public function ctrAddProduct () {


}
/*----------  function showProduct  ----------*/
static public function ctrShowProduct($item, $value){

$table="products";
$response = ProductModel::mdlShowProduct($table,$item,$value);
return $response;

}
/*----------  function EditProduct  ----------*/
static public function ctrEditProduct () {

}
/*----------  function deleteProduct  ----------*/

static public function ctrDeleteProduct () {

}
/*----------  Function viewDetails  ----------*/
static public function ctrShowDetails($item, $value){
	if (isset($_GET["productId"])) {
	$value=$_GET["productId"];
	$item="p_id";
	$table="products";
   $response=ProductModel::mdlShowProduct($table,$item,$value);
   return $response;
	
}

}

}//end of method
 ?>