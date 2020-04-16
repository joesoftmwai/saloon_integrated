<div class="container">
<div class="row my-3 py-3">
<div class="col-8">
<div class="card">
<div class="card-body">

<h1>Shopping Items</h1>
<p>You have [2] Item(s) in your Cart</p>
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<tr>
<th colspan="2">Product</th>
<th>Quantity</th>
<th>Unit Price</th>
<th>Time</th>
<th>Sub-Total</th>
</tr>	
</thead>
<tbody>
<?php 
  $item = null;
  $value=null;
$cart=CartController::crtShowCart($item,$value);
foreach ($cart as $key => $value) {
  $p_id=$value["ct_p_id"];
  $ct_time=$value["ct_time"]; 
  $ct_qty=$value["ct_qty"];

 ?>    
<tr>
<td>
<?php
$item="p_id";
$value=$p_id;
$product=ProductController::ctrShowProduct($item, $value);
$image=$product['p_image'];
 ?> 
<img src="views/img/products/<?php echo $image ; ?>" alt="cartImages" height="50px" width="50px">	
</td>	
<td>
<a href="#" class="text-info">
<?php
$item="p_id";
$value=$p_id;
$product=ProductController::ctrShowProduct($item, $value);
echo($product['p_title']);
 ?>
    
</a>	
</td>
<td>
<?php echo($ct_qty); ?>
</td>
<td>
Kshs    
<?php
$item="p_id";
$value=$p_id;
$product=ProductController::ctrShowProduct($item, $value);
$p_price= $product['p_price'];
echo $p_price;
 ?>    	
</td>
<td>
<?php echo $ct_time; ?>
</td>
<td>
Kshs
<?php
$item="p_id";
$value=$p_id;
$product=ProductController::ctrShowProduct($item, $value);
$p_price=$product['p_price'];
echo $p_price;
 ?>	
</td>
</tr>	
<?php } ?>
</tbody>
<tfoot>
<tr>
<th colspan="4"><strong>Total </strong> </th>	
<th colspan="2"><strong class="float-right">Kshs 308909</strong> </th>	
</tr>	
</tfoot>
</table>	
</div>	
<button class="btn btn-primary float-left"> <a href="home" class="text-light">Continue shopping</a></button>	
</div>	
</div>	
</div>
<div class="col-4">
<div class="card">
<div class="card-header">
<h1>Order Summary</h1>	
</div>
<div class="card-body">
<p class="text-muted">
Delivery and additional costs are calculated based on the values you have entered.
</p>
<div class="table-responsive"><!-- table-responsive Starts -->
<table class="table"><!-- table Starts -->
<tbody><!-- tbody Starts -->
<tr>
<td> Order Subtotal </td>
<th> Kshs 1000.00 </th>
</tr>
<tr>
<td> Order Charges </td>
<th> Kshs 200.00 </th>
</tr>
<tr class="total">
<td>Total</td>
<th>Kshs 1200.00</th>
</tr>
</tbody><!-- tbody Ends -->
</table><!-- table Ends -->
</div>
</div>
<div class="card-footer">
<form >	
<button class="btn btn-success btn-lg btn-block"> CheckOut</button>	
</form>
</div>		
</div>	
</div>	
</div>
</div>

<!--register modal-->
<div class="modal fade" id="checkout_modal">
    <div class="modal-dialog">
        <div class="modal-form register modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CHECKOUT DETAILS</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Full Name</label>
                        <input type="text" class="form-control" name="c_name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Gender</label>
                        <select name="c_gender"class="form-control">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Email</label>
                        <input type="email" class="form-control" name="c_email" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Password</label>
                        <input type="password" class="form-control" name="c_password" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Image</label>
                        <input type="file" class="form-control" name="c_image" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Address</label>
                        <input type="text" class="form-control" name="c_location">
                    </div>

                    <input type="submit" name="register" value="Checkout" class="btn btn-success btn-block">

                </form>
            </div>
        </div>
    </div>
</div>
