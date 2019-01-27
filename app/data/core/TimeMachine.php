<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * TimeMachine: 26.01.2019
 * Time: 17:33
 */

namespace App\data\core;


abstract class TimeMachine
{
    /**
     *
     */
    const DEFAULT_DATE_FORMAT = 'Y-m-d H:i:s';


    /**
     * @param string $dateString
     * @param string $dateFormat
     * @return string
     */
    public static function formatToDateTime(string $dateString, string $dateFormat = ''): string
    {
        $formatUsed = strlen($dateFormat) ? $dateFormat : TimeMachine::DEFAULT_DATE_FORMAT;
        return date($formatUsed, strtotime($dateString));
    }
}