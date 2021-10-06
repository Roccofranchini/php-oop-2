<?php 

// CLASS = Modello per qualcosa 
// OGGETTO = Concretizzazione del modello (ISTANZA)

class Product 
{
    protected $id;
    protected $name;
    protected $brand;
    protected $price;
    protected $weight;
    protected $isavailable;

    public function __construct($_id, $_name, $_brand, $_price, $_weight, $_isavailable ) 
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->weight = $_weight;
        $this->isavailable = $_isavailable;
    }

    public function isAvailable() {
        if ($this->isavailable > 0) {
            return 'Available for the purchase';
        } else {
            return 'Not available for the purchase';
        }
    }
}

$product = new product('1', 'Mouse PC', 'Logitech', 12.99, '1.2', '0');

var_dump($product);