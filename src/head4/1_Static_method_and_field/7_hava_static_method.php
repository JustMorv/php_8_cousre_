<?php

class Service {

}
    
trait PriceUtilities{
    private  static int  $taxrate = 20;

    public static function calculateTax(float $price ): float{
        return ((self::$taxrate / 100) * $price);
    }
}


trait TaxTools{
    public function calculateTax(float $price ): float{
        return (($this->taxrate / 100) * $price);
    }
}

class UtilityService extends Service{

    use PriceUtilities;

}

$u =  new UtilityService();
print UtilityService::calculateTax(100)."\n";