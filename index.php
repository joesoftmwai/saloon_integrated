<?php 
require_once "controllers/template.controller.php";
require_once "controllers/users.controller.php";
require_once "controllers/products.controller.php";
require_once "controllers/orders.controller.php";
require_once "controllers/cart.controller.php";
// require_once "controllers/clients.controller.php";
//require_once "controllers/clients.controller.php";
// require_once "controllers/sales.controller.php";


require_once "models/users.model.php";
require_once "models/products.model.php";
require_once "models/orders.model.php";
require_once "models/cart.model.php";
// require_once "models/clients.model.php";
// require_once "models/sales.model.php";

$template = new TemplateController();
$template -> ctrTemplate();
