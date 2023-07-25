<!-- чтобы обратиться к методу в контексте класса, а не объекта, следует ис
_ пользовать символы :: , а не ->” -->
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


    class bookProduct extends ShopProduct{
        public $numPages;
        public function __construct(string $title,string $producerFirstName,
                                    string $producerMainName,float $price,
                                    int $numPages){
            parent::__construct($title,$producerFirstName,$producerMainName,$price);
            $this->numPages = $numPages; 
        }
        public function getNumPages():int{
            return $this->numPages;
        }
        public function getSummaryLine():string{
            $base = parent::getSummaryLine();
            $base .= ": {$this->numPages} стр"; 
            return $base; 
        }
    }


    class CDProduct extends ShopProduct{
        public $playLenght;
        public function __construct(string $title,string $producerFirstName,
                                    string $producerMainName,float $price,
                                    int $playLenght){


            parent::__construct($title,$producerFirstName,$producerMainName,$price);
            $this->playLenght = $playLenght; 
        } 
        
        public function getPlayLenght():int{
            return $this->playLenght;
        }

        public function getSummaryLine():string{
            $base = parent::getSummaryLine();
            $base .= "{$this->playLenght} length";
            return $base; 
        }
    }
