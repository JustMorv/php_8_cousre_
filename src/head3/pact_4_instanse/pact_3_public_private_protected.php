<?
class shopProduct{
    private $discount;
    private $price;

    public function setDiscount(int $num) : int{
        return $this->discount;
    }
    public function getPrice():int{
        return ($this->price - $this->discount);
    } 

}
