<? 
    class ShopProduct{
        const varie = 12;
        public $numPages;
        public $playLenght;
        public $producerMainName;
        public $producerFirstName;
        public $price;
        public function __construct(string $title,string $producerFirstName,
                                    string $producerMainName, float $price,
                                    int $numPages = 0,int $playLenght = 0){
            $this->tille = $title;
            $this->producerFirstName = $producerFirstName;
            $this->producerMainName = $producerMainName;
            $this->price = $price;
            $this->numPages = $numPages;
            $this->playLenght = $playLenght;

        }
        public function getProduct():string{
            return $this->producerFirstName ." ". $this->producerMainName;
        }
        public function getSummaryLine():string{
            $base = "{$this->tille} ($this->producerMainName),";
            $base .= "{$this->producerFirstName})";
            return $base; 
        }
    }

    // instanse

    class CDProduct extends ShopProduct{
        public function getPlayLength() : int{
            return $this->playLenght;
        }
        public function getSummaryLine():string{
            $base  = "{$this->tille} ($this->producerMainName),";
            $base .= "{$this->producerFirstName})";
            $base .= "время звучания - {$this->playLenght}";
            return $base; 
        }
    }

    class boockProduct  extends ShopProduct{
        public function getNumPages():int{
            return $this->numPages;
        }
    }
    $product2 = new CDProduct(
                    "Классическая музыка. Лучшее",
                    "Антонио",
                    "Вивальди",
                    10.99,
                    0 ,
                    60.33);

    print_r(ShopProduct::varie);