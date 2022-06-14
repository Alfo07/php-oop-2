<?php
require_once __DIR__ . '/Traits/Card.php';

class User {
    use Card;
    protected $name;
    public $registration = 'Unregistered user';
    protected $surname;
    protected $email;
    protected $address;
    protected $shopping = [];

    function __construct($_name, $_surname, $_address){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->address = $_address;
    }

    public function setName($_name) {
    $this->name = $_name;
    }
    public function getName() {
    return $this->name;
    }
    
    public function setSurname($_surname) {
    $this->surname = $_surname;
    }
    public function getSurname() {
        return $this->surname;
    }

    public function setEmail($_email) {
    if (!strpos($_email, '@') || !strpos($_email, '.')){
        throw new Exception('Email not valid');
        } else {
            $this->email = $_email;
        }
    }
    public function getEmail() {
        return $this->email;
    }

    public function setShopping($_shopping){
        $this->shopping[] = $_shopping;
    }
    public function getShopping(){
        return $this->shopping;
    }

}
