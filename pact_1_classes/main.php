

<?

//base classe 
class ShopProduct{
    public $title = "стандартный товар";
    public $producerMainName = "фамилия товара";
    public $producerFirstName = "имя товара";
    public $price = 0;
    
}
//create instatnse of class
$prodcution1 = new ShopProduct();
$prodcution2 = new ShopProduct();

//override option
$prodcution1->title = "компьютер";
$prodcution2->title = "ревизор";

//output options
echo $prodcution1->title;
echo $prodcution2->title;

//add options 
$prodcution1->arbitraryAddition = "дополнителыный параметр";
echo $prodcution1;