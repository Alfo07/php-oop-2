<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Traits/Card.php';
class UserLogin extends User {
    use Card;
    public $registration = 'Unregistered user';
    protected $discount;
    protected $cardNumber;

    function __construct($_name, $_surname, $_address, $_discount = 30) {
        parent::__construct($_name, $_surname, $_address, $_discount);
        $this->discount = $_discount;
    }

    public function getDiscount() { 
        return $this->discount;
    }
    
    public function setCardNumber($_cardNumber) { 
        $this->cardNumber = $_cardNumber;
    }

    public function getCardNumber() { 
        return $this->cardNumber;
    }
}
