<?php
  if (!isset($_SESSION['c_email'])) {
      echo "<script>

        swal({
                type:'error',
                        title: 'error',
                        text: 'you are not loggged in',
                        showConfirmButton: true,
                        confirmButtonText:'Close',
                        closeOnConfirm:false
                }).then((result)=>{
                  if(result.value){
                    window.open('home','_self');
                  }
                  });

                </script>";

                  } else {

?>
<div class="container">
<div class="row">
       <div class="col-md-3">
           <?php
           include "customer/customer-sidebar.php";
           ?>
       </div>

       <div class="col-md-9">

           <?php
              include "views/modules/customer/my-orders.php";
           ?>
       </div>
</div>
</div>

<?php } ?>


