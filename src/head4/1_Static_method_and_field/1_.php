<?
class StaticExempel {
    public static int $aNum = 0;
    public static function sayHello():void{

        self::$aNum++;
        // this->$anum++//
        echo "hello" .  self::$aNum. "\n" ;
    }

}


print StaticExempel::$aNum;

StaticExempel::sayHello()
?>