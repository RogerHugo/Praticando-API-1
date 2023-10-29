<?php
require "../../router.php";
//require __DIR__ . "../router.php";
$response = router();

echo "Deu certo";

echo $_SERVER["REQUEST_URI"];

