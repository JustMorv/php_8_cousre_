<?
class ShopProduct{
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
    public function getProducer(){
        return $this->producerFirstName . " " . $this->producerMainName;
    }
    public function getSummaryLine():string{
        $base = "{$this->tille} ($this->producerMainName),";
        $base .= "{$this->producerFirstName})";
        return $base; 
    }
}

class shopProductWriter{
    private $products =[];
    public function addProduct (ShopProduct $shopProduct):void{
        $this->products = $shopProduct;
    }

    public function write():void{
        foreach ($this->products as $shopProduct){
            $str .= "{$shopProduct->title}:";
            $str .= $shopProduct->getProducer();
            $str .= "({$shopProduct->getPrice() }) \n";
        }
        return $str;
    }
}

