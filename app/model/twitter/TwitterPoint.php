<?php
/**
 * Created by IntelliJ IDEA.
 * User: kemen
 * Date: 27.01.2019
 * Time: 14:44
 */

namespace App\model\twitter;


abstract class TwitterPoint
{
    /**
     * @var string
     */
    var $type = 'Point';
    /**
     * @var array
     */
    var $coordinates = [];

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getCoordinates(): array
    {
        return $this->coordinates;
    }

    /**
     * @param array $coordinates
     */
    public function setCoordinates(array $coordinates): void
    {
        $this->coordinates = $coordinates;
    }

}