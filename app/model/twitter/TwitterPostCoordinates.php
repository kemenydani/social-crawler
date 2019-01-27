<?php
/**
 * Created by IntelliJ IDEA.
 * User: kemen
 * Date: 27.01.2019
 * Time: 14:35
 */

namespace App\model\twitter;


use App\lib\JSON;

class TwitterPostCoordinates extends TwitterPoint
{
    use JSON;

    /**
     * TwitterPostCoordinates constructor.
     * @param null|string $jsonString
     */
    public function __construct(?string $jsonString)
    {
        if (is_string($jsonString))
        {
            $this->populateFromJSON($jsonString);
        }
    }

    public function getX()
    {
        return @$this->coordinates[1];
    }

    public function getY()
    {
        return @$this->coordinates[0];
    }
}