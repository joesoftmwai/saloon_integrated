<?php 
/*======================================
=            CARTCONTROLLER            =
======================================*/

class CartController{
/*----------  ADD CART FUNCTIONS  ----------*/
static public function ctrAddCart(){	
if(isset($_POST["submit"])) {
$table ="cart";
$data = array(
	"ct_p_id" => $_POST["ct_p_id"],
	"ct_qty" => $_POST["ct_qty"],
	"ct_c_id" => $_POST["ct_c_id"],
	"ct_time" => $_POST["ct_time"]
	);

$response = ModelCart::mdlAddCart($table, $data);
 
  if ($response == "ok"){
					echo "<script>
					 swal({
					 	type:'success',
		                title: 'Success...',
		                text: 'Added to Cart successfully',
		                showConfirmButton: true,
		                confirmButtonText:'Close',
		                closeOnConfirm:false
					 	}).then((result)=>{
					 		if(result.value){
					 			window.location = 'cart';
					 		}
					 		});
					 </script>";
				}
 }
}	
/*----------  ShowCart  ----------*/
static public function crtShowCart($item, $value){
$table ="cart";
$response = ModelCart::mdlShowCart($table,$item,$value);
return $response;	
}

}//end class cart controller
 ?>