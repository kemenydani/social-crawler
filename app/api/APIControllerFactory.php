<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 19:36
 */

namespace App\api;


use App\api\twitter\TwitterApiConfigInterface;

abstract class APIControllerFactory
{
    public static function makeTwitter(TwitterApiConfigInterface $apiConfig) {
        return new TwitterAPIController($apiConfig);
    }
}