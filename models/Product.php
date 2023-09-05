<?php

namespace models;

require_once("database/db.php");
class Product
{
    protected $table = "products";
    protected $primaryKey = "id";
    public $id;
    public $name;
    public $price;
    public $description;
    public $qty;

    public function all(){
        $sql = "select * from $this->table";
        $conn = connect();
        $result = $conn->query($sql);
        $data= [];
        while ($row= $result->fetch_assoc()){
            $p = new Product();
            $p->id= $row["id"];
            $p->name= $row["name"];
            $p->price= $row["price"];
            $p->description= $row["description"];
            $p->qty= $row["qty"];
            $data[] = $p;
        }
        return $data;
    }

    public function store($data){

    }
}