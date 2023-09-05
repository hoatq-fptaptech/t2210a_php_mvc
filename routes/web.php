<?php
include_once("controllers/ProductController.php");

$page = isset($_GET["page"])?$_GET["page"]:"/";

switch ($page){
    case "product":{
        $productCtr = new controllers\ProductController();
        $productCtr->action();
        break;
    }
    default: die("404 not found");
}