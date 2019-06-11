<?php


class Point2d
{
    public $x;
    public $y;
    public $XY=[];
    public function __construct($x,$y)
    {
        $this->x =$x;
        $this->y =$y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }
    public function setXY($XY){
        $this->XY =$XY;
    }

    /**
     * @return mixed
     */
    public function getXY()
    {
         array_push($this->XY,$this->x);
         array_push($this->XY,$this->y);
         return implode(',',$this->XY);
    }
}
$point2d = new Point2d(2,3);
echo $point2d->getXY();