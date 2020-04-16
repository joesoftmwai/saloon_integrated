<?php 
 $item = null;
 $value=null;  
$products=ProductController::ctrShowProduct($item,$value);
foreach ($products as $key => $value) {
 ?>
<div class="col-10 mx-auto my-3 col-md-6 col-lg-4">
          <div class="card car-card">
            <img src="views/img/products/<?php echo $value['p_image'] ?>" class=" card-img-top car-img" alt="" height="200px">
            <div class="card-body">
              <div class="card-info d-flex jastify-content-between">
                <div class="car-text text-uppercase">
                  <h6 class="font-weight-bold">
                    <?php echo($value['p_title']) ?>
                  </h6>
                  <h6>Best</h6>
                </div>
                <h5 class="car-value align-self-center py-2 px-3">Ksh
                   <span class="car-price"><?php echo $value["p_price"] ?></span>
                </h5>
              </div>
            </div><!--the card footer srt--->
            <div class="card-footer text-capitalize d-flex justify-content-between">
              <p><span><i class="fas fa-cogs "></i></span> <a href="index.php?root=details&productId=<?php echo $value['p_id'] ?>"> View Detail </a></p>
              
              <p ><a href="index.php?root=details&productId=<?php echo $value['p_id'] ?>" class="text-success">BOOK<i class="fas fa-shopping-cart"></i></a></p>
            </div>
          </div>
 </div>
<?php } ?>

