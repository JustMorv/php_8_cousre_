<?

    // trait PriceUtilities{
    //     private int  $taxrate = 20;

    //     public function calculateTax(float $price ): float{
    //         return (($this->taxrate / 100) * $price);
    //     }
    // }


    
    // class ShopProduct{
    //     use PriceUtilities;

    // }

    //  какая-то ирархия

    class Service {

    }

    // class UtilityService extends Service{
    //     use PriceUtilities;

    // }

    // $p = new ShopProduct();
    // print $p->calculateTax(100). "\n";

    // $u = new UtilityService();
    // print $u->calculateTax(200)."\n";

    // ---------------------------------------------------

    
    trait IdentityTrait
    {
        public function generateld(): string{
            return uniqid();
        }
    }


    // class ShopProduct{
    //     use PriceUtilities;
    //     use IdentityTrait;
    // }
    // $shop =  new shopProduct();
    // print $shop->calculateTax(10)."\n";
    // print $shop->generateld();

    // ---------------------------------------------------

    // trait and interface


    interface IdentityObject{
        public function generetedId() : string;
    }

    class ShopProduct implements IdentityObject{
        use PriceUtilities;
        use IdentityTrait;
        public function generetedId() : string{
            return uniqid();
        }
    }

    // public static function storeldentityObject(IdentityObject $lob){

    // }

    
    // ---------------------------------------------------
    // Устранение конфликтов имен методов с помощью
    // ключевого слова insteadof

    
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
        }
    }

    $io = new UtilityService();

    echo $io->calculateTax(100)."\n";

    


    

?>