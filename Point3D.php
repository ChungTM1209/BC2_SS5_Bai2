<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 25/01/2019
 * Time: 14:35
 */
include_once 'Point2D.php';

class Point3D extends Point2D
{
    protected $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getXYZ()
    {
        $arr[] = parent::getX();
        $arr[] = parent::getY();
        $arr[] = $this->z;
        return json_encode($arr);
    }

    public function __toString()
    {
        return "Point3D: " . $this->getXYZ() . "<br>";
    }
}