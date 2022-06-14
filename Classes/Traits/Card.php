<?php

trait Card {
    protected $cardExpiration;

    public function setCardExpiration($_cardExpiration) {
    if (date('Y/M') > $_cardExpiration){
        throw new Exception('Carta non valida');
        } else {
            $this->cardExpiration = $_cardExpiration;
        }
    }

    public function getCardExpiration(){
        return $this->cardExpiration;
    }

}
