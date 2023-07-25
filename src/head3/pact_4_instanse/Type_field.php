<?
class Point {
    public int $x = 0;
    public int $y = 0;

    public function setValues(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getX():int{
        return $this->x;
    }
    public function getY():int{
        return $this->y;
    }
}