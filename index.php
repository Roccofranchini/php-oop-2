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

    //   --- GET --   //

    public function getId() {

        return $this->id;
    }

    public function getName() {

        return $this->name;
    }

    public function getBrand() {

        return $this->brand;
    }

    public function getPrice() {

        return $this->price;
    }

    public function getWeight() {

        return $this->weight;
    }
    
    //   --- METHODS ---   //

    public function isAvailable() {
        if ($this->isavailable > 0) {
            return 'Available for the purchase';
        } else {
            return 'Not available for the purchase';
        }
    }
}

class User 
{
    protected $id;
    protected $email;
    protected $name;
    protected $surname;
    protected $adress;
    protected $phone;
    protected $discount;

    public function __construct($_id, $_email, $_name, $_surname, $_adress, $_phone, $_discount = 0 ) 
    {
        $this->id = $_id;
        $this->email = $_email;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->adress = $_adress;
        $this->phone = $_phone;
        $this->discount = $_discount;
    }

    //   --- GET --   //

    public function getId() {

        return $this->id;
    }

    public function getEmail() {

        return $this->email;
    }

    public function getBrand() {

        return $this->brand;
    }

    public function getFullName() {

        return $this->name . '' . $this->surname;
    }

    public function getAdress() {

        return $this->adress;
    }

    public function getPhone() {

        return $this->phone;
    }

    public function getDiscount() {
        if ($this->discount == 0) return "Nessuno sconto disponibile";
        return "Il tuo sconto è " . $this->discount;

    }
    
    //   --- METHODS ---   //

    
}

class Premium extends User {

    protected $discount;

    public function __construct($_id, $_email, $_name, $_surname, $_adress, $_phone, $discount = 50) {
        parent::__construct($_id, $_email, $_name, $_surname, $_adress, $_phone, $discount = 50 );
    }

}

$product = new product('1', 'Mouse PC', 'Logitech', 12.99, '1.2', '0');

echo "<p>" . $product->getId() . "</br>";
echo $product->getName() . "</br>";
echo $product->getBrand() . "</br>";
echo $product->getPrice() . "</br>";
echo $product->getWeight() . "</br>";
echo $product->isAvailable() . "</br>" . "</p>";


$user = new User('79', 'giuseppe.b@gmail.com', 'Giuseppe', 'Bianchi', 'via Palazzo', '3393464477');


echo "<p>" . $user->getId() . "</br>";
echo $user->getEmail() . "</br>";
echo $user->getFullName() . "</br>";
echo $user->getPhone() . "</br>";
echo $user->getAdress() . "</br>";
echo $user->getDiscount() . "</br>" . "</p>";


$user = new Premium('99', 'luca.p@gmail.com', 'Luca', 'Pelazza', 'via Roma', '3313424587');


echo "<p>" . $user->getId() . "</br>";
echo $user->getEmail() . "</br>";
echo $user->getFullName() . "</br>";
echo $user->getPhone() . "</br>";
echo $user->getAdress() . "</br>";
echo $user->getDiscount() . "</br>" . "</p>";