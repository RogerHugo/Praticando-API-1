<?php
function router()
{
    echo "entrou na função router<br>";
    $uri = $_SERVER["REQUEST_URI"];
    echo "$uri <br>";
    switch($uri)
    {
        case "/Praticando-API-1/api/v1/pessoas/ ":
            echo "index.pphp<br>";
            //return require __DIR__ . "v1/pessoas/index.php";
            
        case "api/v1/":
            return require __DIR__ . "api/v1/pessoas/.php";
        case "api/v1/pessoas/store":
            return require __DIR__ . "api/v1/pessoas/store.php";
        case "/Praticando-API-1/api/v1/pessoas/update":
            return require __DIR__ . "v1/pessoas/update.php";
        case "api/v1/pessoas/delete":
            return require __DIR__ . "api/v1/pessoas/.php";
        default:
            header("HTTP/1.1 404 Not Found");
            exit();
    }
}