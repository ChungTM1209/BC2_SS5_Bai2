<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 25/01/2019
 * Time: 14:13
 */

class Point2D
{
    protected $x;
    protected $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }


    public function getY()
    {
        return $this->y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }


    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        $arr[] = $this->x;
        $arr[] = $this->y;
        return json_encode($arr);
    }

    public function __toString()
    {
        return "Point2D: " . $this->getXY() . "<br>";
    }
}