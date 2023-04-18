<? 
class ShopProduct{
    public $title = "стандартный товар";
    public $producerMainName = "фамилия товара";
    public $producerFirstName = "имя товара";
    public $price = 0;
    
}

//create instatnse of class
$prodcution1 = new ShopProduct();

$prodcution1->tille              = "Компьютер";
$prodcution1->producerMainName   = "Булгаков";
$prodcution1->producerFirstName  = "Михаил";
$prodcution1->price              = "5.99";

echo "Aвтор: {$prodcution1->producerFirstName}" . "{$prodcution1->producerMainName }";


