<div class="container">
<?php 
$item=null;
$value=null;
$productDetails=ProductController::ctrShowDetails($item,$value);

?>
 <div class="card py-5 my-5 bg-secondary">
 <div class="card-body">
<div class="row">
<div class="col-6">
<img src="views/img/products/<?php echo $productDetails["p_image"]; ?>" alt="productDescription" height="380px" width="500px">
</div>
<div class="col-6">
<div class="card">
<div class="card-body">
<h3>Title <strong> <?php echo $productDetails["p_title"]; ?></strong></h3>
<form method="post">
 <div class="form-group">
  <label class="form-control-label font-weight-bold">Quantity</label>
<input type="number" class="form-control" name="ct_qty" value="1">
 </div>
 <?php if($productDetails["p_type"]=="service"):?>
<div class="form-group">
 <label class="form-control-label font-weight-bold">Time</label>
 <input type="text" class="form-control" name="ct_time" placeholder="Example: 10-02-2020 10:30:00">
 </div>	
 <?php endif ?>
 <div class="form-group">
 <label class="form-control-label font-weight-bold">Amount (Kshs)</label>
 <input type="text" class="form-control" value='<?php echo $productDetails["p_price"] ?>' readonly>
 </div>	
 <input type="hidden" class="form-control" name="ct_p_id" value='<?php echo $productDetails["p_id"]?>'>
 <input type="hidden" class="form-control" name="ct_c_id" value='1'> 
 <div class="form-group">
 <label class="form-control-label font-weight-bold"></label>
 <input type="submit" class="form-control btn btn-success" name="submit" value="Add To Cart">
 </div>	
 <?php 
$addcart= new CartController();
$addcart -> ctrAddCart();
  ?>
</form>	
</div>
</div>	
</div>
</div>
</div>	
 <div class="card">
 <div class="card-body">
 	<p class="text-danger"> Porduct Description</p>
 	<button class="badge badge-primary">Safe</button>
 	<button class="badge badge-warning">Accurate</button>
 	<button class="badge badge-info">On Time</button>
 	<button class="badge badge-success">Excellent</button>
 	<p> <?php echo ($productDetails["p_desc"]); ?></p>
 </div>
 </div>	
 </div>
 </div>

