<?php

class Service {

}

    
trait PriceUtilities{

    public function calculateTax(float $price ): float{
        return (($this->getTextRate() / 100) * $price);
    }
  
    /**
     * Summary of getTextRate
     * @return float
     */

}


trait TaxTools{
    public function calculateTax(float $price ): float{
        return (($this->taxrate / 100) * $price);
    }
}

class UtilityService extends Service{
    use PriceUtilities{
        PriceUtilities::calculateTax as private;
    }
    public function __construct(private float $price){}

    public function getTextRate():float{
        return 20;
    }
    
    public function getFinalPrice():float{
        return ($this->price + $this->calculateTax($this->price));
    }


}

$u =  new UtilityService(100);
print $u->getFinalPrice()."\n";