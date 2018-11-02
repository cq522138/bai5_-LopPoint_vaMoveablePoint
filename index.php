<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 11/1/18
 * Time: 7:54 PM
 */

class Point2d
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

    public function toString()
    {
        return "vi tri diem la" . $this->x . $this->y;
    }
}

class MoveablePoint extends Point2d
{
    private $xSpeed;
    private $ySpeed;

    public function __construct($xSpeed, $ySpeed, $x, $y)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this->x . $this->y;
    }

}

$point2d = new Point2d(3,4);
$moveablepoint = new MoveablePoint(1,3,1,1);
echo $moveablepoint->move();