<?php
    class ShopProduct{
        public $title = "стандартный товар";
        public $producerMainName = "фамилия товара";
        public $producerFirstName = "имя товара";
        public $price = 0;

        public function __construct(
            public $title,
            public $producerMainName = "",
            public $producerFirstName ="",
            public $price = 0
        ){
            
        } 


        public function getProducer(){
            return $this->producerFirstName . " " . $this->producerMainName;
        }

    }

    $prodcution1 = new ShopProduct(
        price: 0.8 , 
        title: "Каталог книг "
    );
    
    print "Автор: {$prodcution1->getProducer()} \n";
