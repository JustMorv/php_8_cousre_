<?php
    class ShopProduct{
        public $title = "стандартный товар";
        public $producerMainName = "фамилия товара";
        public $producerFirstName = "имя товара";
        public $price = 0;

        public function __construct($title, $fistname,$mainName,$price){
            $this->title               =$title;
            $this->producerMainName    =$mainName;
            $this->producerFirstName   =$fistname;
            $this->price               =$price; 

        }

        public function getProducer(){
            return $this->producerFirstName . " " . $this->producerMainName;
        }

    }


    $prodcution1 = new ShopProduct("Компьютер", "Михайл","Булгаков",5.99);
    
    print "Автор: {$prodcution1->getProducer()} \n";
