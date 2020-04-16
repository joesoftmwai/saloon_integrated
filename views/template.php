<?php include("includes/header.php");

if (isset($_GET["root"])) {
  if ($_GET['root']=='home'
      || $_GET['root']== 'details'
      || $_GET['root']== 'cust-account'
      || $_GET['root']== 'logout'
      || $_GET['root'] == 'cart'){
   include 'modules/'.$_GET['root'].'.php';
  }

}else{
    include 'modules/home.php';
}
 include'includes/footer.php'; 
 ?>
