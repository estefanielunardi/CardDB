
<?php

require("../vendor/autoload.php");
// require("src/index.php");
header("Content-Type: application/json"); 

$request = $_SERVER; 
new App\Core\ApiRouter($request, $_GET["id"]); 

?>
