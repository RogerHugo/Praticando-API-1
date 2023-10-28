<?php
include "database/dbconnect.php";
include "class/TabelaAPI.php";

$tabela = new TabelaAPI($conn, "pessoa");

if($_SERVER['REQUEST_METHOD'] === "GET")
{
    echo json_encode($tabela->GetAllInstancias());
}