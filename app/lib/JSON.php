<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * TimeMachine: 26.01.2019
 * Time: 17:25
 */

namespace App\lib;


trait JSON
{
    public function toJSON()
    {
        return json_encode($this);
    }

    public function populateFromJSON(?string $jsonString)
    {
        if (is_string($jsonString))
        {
            $stdClass = json_decode($jsonString);

            if (is_object($stdClass))
            {
                foreach(get_object_vars($stdClass) as $propertyName => $propertyValue)
                {
                    if(property_exists(__CLASS__, $propertyName))
                    {
                        $this->$propertyName = $propertyValue;
                    }
                }
            }
        }
    }
}