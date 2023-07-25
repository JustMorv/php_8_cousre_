<?
class ShopProduct{
    private int | float $discount = 0;

    public function __construct(private string $title,
                                private string $producerFirstName, 
                                private string $producerMainName,
                                protected int | float $price){
            
    }
    public function getProducerFirstName():string{
        return $this->producerFirstName;
    }
    public function getProducerMainName():string{
        return $this->producerMainName;
    }
    public function setDiscount(int | float $num):void{
        $this->discount = $num;
    }
    public function getDiscount():int{
        return $this->discount;
    }
    public function getTitle():string{
        return $this->tille;
    }
    public function getPrice():int | float{
        return ($this->price - $this->discount);
    }
    public function getProducer(): string{
        return $this-> producerFirstName . " " . $this->producerMainName;
    }
    public function getSummaryLine():string{
        $base = "{$this->title} ({$this->producerMainName},)";
        $base .= "{$this->producerFirstName})";
        return $base;
    }

}

class CDProduct extends ShopProduct{
    public function __construct(string $title,string $producerFirstName,
                                string $producerMainName,int | float $price,
                                private int $playLength)
    {
        parent::__construct($title,$producerFirstName,$producerMainName,$price);
    }
    public function getPlayLength():int{
        return $this->playLenght;
    }
    public function getSummaryLine():string{
        $base  = parent::getSummaryLine();
        $base .= ": time of length {$this->playLenght}";
        return $base;
    }
}

class BookProduct extends ShopProduct{
    public function __construct(string $title,string $producerFirstName,
                                string $producerMainName,int | float $price,
                                private int $numPages)
    {
        parent::__construct($title,$producerFirstName,$producerMainName,$price);
    }
    public function getNumPages():int{
        return $this->numPages;
    }
    public function getSummaryLine():string{
        $base  = parent::getSummaryLine();
        $base .= ": {$this->numPages} стр";
        return $base;
    }

}