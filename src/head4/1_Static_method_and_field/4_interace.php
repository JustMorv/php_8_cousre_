<?
    interface Chargeable{
        public function getPrice(): float;
    }


    class ShopProduct implements Chargeable{
        private $price = 10;
        public function getPrice(): float{
            return $this->price;
        }

    }

    class Shipping implements Chargeable{
        public function __construct(private float $price){
            $this->price = $price;
        }
        public function getPrice(): float{
            return $this->price;
        }

    }

    $shipping = new Shipping(1.2);
    $shipping->getPrice();
?>