<?php

ob_start();
session_start();
// session_destroy();

defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR); 

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK",__DIR__ . DS . "templates/back");

defined("UPLOAD_DIR") ? null : define("UPLOAD_DIR",__DIR__ . DS . "uploads");

defined("SLIDER_DIR") ? null : define("SLIDER_DIR",__DIR__ . DS . "slider-imgs");

defined("DB_HOST") ? null : define("DB_HOST","localhost"); 

defined("DB_USER") ? null : define("DB_USER", "root");

defined("DB_PASS") ? null : define("DB_PASS","");

defined("DB_NAME") ? null : define("DB_NAME","ecommerce_db");

// define('STRIPE_API_KEY' , 'sk_test_51JIDOpFGanmcY1khThapV2V9zQqyeORfYxhlDD6dB5ab9hkxgCHvYwfEiSQ4NcR7kyPTBPmPgPKaQF7Ul9uRUDm2007B1SS8Hk');
// define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51JIDOpFGanmcY1khi7wPwLddSydDXw3X7kclDHxkrLfLhLypyAljRK8Q9ZITqvC89jNqUvvlajRAzuAOHNAQfhyL00AbL8VCST');
// define('STRIPE_SUCCESS_URL', 'http://localhost/public/thank_you.php');
// define('STRIPE_CANCEL_URL', 'http://localhost/public/checkout.php');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


require_once("functions.php");
require_once("cart.php");

//my
// echo DIRECTORY_SEPARATOR; /

?>