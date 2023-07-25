<?php

class Service {

}
    
trait PriceUtilities{
    private int  $taxrate = 20;

    public function calculateTax(float $price ): float{
        return (($this->taxrate / 100) * $price);
    }
}


trait TaxTools{
    public function calculateTax(float $price ): float{
        return (($this->taxrate / 100) * $price);
    }
}

class UtilityService extends Service{

    use PriceUtilities;
    use TaxTools{
        TaxTools::calculateTax insteadof PriceUtilities;
        PriceUtilities::calculateTax as basicTax;
    }
}

$u =  new UtilityService();
print $u->calculateTax(100)."\n";
print $u->basicTax(100)."\n";