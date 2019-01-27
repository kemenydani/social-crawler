<?php
/**
 * Created by IntelliJ IDEA.
 * User: kemen
 * Date: 27.01.2019
 * Time: 16:04
 */

namespace App\model\twitter;


use App\lib\JSON;

class TwitterPostEntityHashTag
{
    var $text;
    var $indices = [];

    use JSON;

    public function __construct(?string $jsonString)
    {
        if (is_string($jsonString))
        {
            $this->populateFromJSON($jsonString);
        }
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

    /**
     * @return array
     */
    public function getIndices(): array
    {
        return $this->indices;
    }

    /**
     * @param array $indices
     */
    public function setIndices(array $indices): void
    {
        $this->indices = $indices;
    }


    /**
     * @return int
     */
    public function getStartsAtChar(): ?int
    {
        return @$this->indices[0];
    }

    /**
     * @return int
     */
    public function getEndsAtChar(): ?int
    {
        return @$this->indices[1];
    }
}
