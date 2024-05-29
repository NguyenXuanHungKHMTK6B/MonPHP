<?php
    abstract class Product {
        public $id;
        public $name;
        function setId($id) {
            $this->id = $id;
        }
        function setName($name) {
            $this->name = $name;
        }
        function getId() {
            return $this->id;
        }

        function getName() {
            return $this->name;
        }
        abstract public function __toString();
    }
    class Laptop extends Product{
        public $company;
        public $color;
        public $amount;
        public $price;
        function setCompany($company) {
            $this->company = $company;
        }
        function setColor($color) {
            $this->color = $color;
        }
        function setAmount($amount) {
            $this->amount = $amount;
        }

        function setPrice($price) {
            $this->price = $price;
        }
        function getCompany() {
            return $this->company;
        }

        function getColor() {
            return $this->color;
        }

        function getAmount() {
            return $this->amount;
        }

        function getPrice() {
            return $this->price;
        }
        function __construct($id, $name, $company, $color, $amount, $price) {
            $this->id = $id;
            $this->name = $name;
            $this->company = $company;
            $this->color = $color;
            $this->amount = $amount;
            $this->price = $price;
        }
        public function subtotal() {
            return intval($this->price) * $this->amount;
        }
        public function __toString() {
            return "{$this->id}-{$this->name}-{$this->company}-{$this->color}-{$this->amount}-{$this->price}-{$this->subtotal()}";
        }      
    }
?>