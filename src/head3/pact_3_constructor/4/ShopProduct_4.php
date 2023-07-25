<?php namespace foo;

    class ShopProduct{
        public $title = "стандартный товар";
        public $producerMainName = "фамилия товара";
        public $producerFirstName = "имя товара";
        public $price = 0;

        public function __construct(string $title, string $fistname, 
                                    string $mainName, float $price){

            $this->title               =$title;
            $this->producerMainName    =$mainName;
            $this->producerFirstName   =$fistname;
            $this->price               =$price; 

        }

        public function getProducer(){
            return $this->producerFirstName . " " . $this->producerMainName;
        }
        public function getPrice():int|float{
            return $this->price;
        }
        public function setDiscount(int|float $num) :void {
            $this->discount = $num;
        }

    }
    class ShopPoductWrite{
        public function write($shopProduct){
            $str = $shopProduct->title . ": "
            . $shopProduct->getProducer()
            . " ( " .$shopProduct->price . " )\n";
            print $str;
        }
    }


    $prodcution1 = new ShopProduct("Компьютер", "Михайл","Булгаков", 5.99);
    
    $write = new ShopPoductWrite();


    $write->write($prodcution1);


    
