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
    abstract public function getTextRate():float{


    }

}


trait TaxTools{
    public function calculateTax(float $price ): float{
        return (($this->taxrate / 100) * $price);
    }
}

class UtilityService extends Service{

    public function getTextRate():float{
        return 20;
    }



    use PriceUtilities;

}

$u =  new UtilityService();
print UtilityService::calculateTax(100)."\n";