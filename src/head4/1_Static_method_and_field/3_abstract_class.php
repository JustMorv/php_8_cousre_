<?
    abstract class ShopProductWrite{
        protected array $products = [];

        public function addProduct(ShopProduct $product) : void{
            self::$products[] = $product;
        }

        abstract public function write() : void;
    }



    // class XmlProductWrite extends ShopProductWrite{
    //     $write = new \XMLWriter();
    //     $write->openMemory();
    //     $write->startDocument("1.0", "utf-8");
    //     $write->startElement("products");
    //     foreach ($this->products as $shopProduct) {
    //         $write->startElement("product");
    //         $write->writeAttribute("name", $shopProduct->getTitle());
    //         $write->startElement("Resume");
    //         $write->text($shopProduct->getSummaryLine());
    //         $write->endElement();
    //         $write->endElement();
    //                     # code...
    //     }
    //         $write->endElement();
    //         $write->endDocument();

    //         print $write->flush();
    //     }


class TextProductWriter extends shopProductWriter{
    public function write():void{
        $str = "products:\n";
        foreach ($this->products as $product) {
            // $str .= $shopProduct->getSummaryLine(). "\n";
            # code...
        }
        print $str;
    }
}
    
?>