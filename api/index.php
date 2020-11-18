
<?php
// echo "hola aqui API!!";

require("../vendor/autoload.php");
header("Content-Type: application/json"); 

$request = $_SERVER;
// echo $_SERVER["REQUEST_METHOD"];

if (!isset($_GET["id"]))
{
    $_GET["id"] = 0;
}

new App\Core\ApiRouter($request, $_GET["id"]); 
