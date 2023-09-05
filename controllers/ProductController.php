<?php

namespace controllers;

use models\Product;

require_once("models/Product.php");
class ProductController
{
    public function action(){
        $action = isset($_GET["action"])?$_GET["action"]:"/";
        switch ($action){
            case "/": return $this->listProducts();
            case "create": return $this->create();
            case "save": return $this->save();
            case "edit": return $this->edit();
            case "update": return $this->update();
            case "delete": return $this->delete();
            default: die("404 not found");
        }
    }
    public function listProducts(){
        $productObj = new Product();
        $products = $productObj->all();
        include_once("views/product/list.php");
    }

    public function create(){
        include_once("views/product/create.php");
    }

    public function save(){
//        $name = $_POST["name"];
//        $price = $_POST["price"];
//        $qty = $_POST["qty"];
//        $description = $_POST["description"];
        $productObj = new Product();
        $products = $productObj->store($_POST);
        header("Location: index.php?page=product");
    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){

    }
}