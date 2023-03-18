<?php

    // BuyProduct class extending to an abstract class of Visa
    class BuyProduct extends Visa {

        // a compulsory methods to be implemented if a class extends to 
        // the abstract class VIsa 
        public function getPayment() {
            return $this->visaPayment();
        }
    }

?>