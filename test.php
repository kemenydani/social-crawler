<?php

error_reporting(E_ALL);

require "vendor/autoload.php";

use App\api\twitter\TwitterApiConfig;
use App\api\twitter\twitterAPIController;

$apiController = new TwitterAPIController(
    new TwitterApiConfig()
);

$query = [
    "lang" => "hu",
    "q" => "szeged",
    "count" => 2
];

$posts = $apiController->getPosts($query);



var_dump($posts);