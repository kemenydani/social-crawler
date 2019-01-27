<?php
/**
 * Created by IntelliJ IDEA.
 * User: kemen
 * Date: 27.01.2019
 * Time: 11:16
 */


use App\config\ApiConfigTwitter;
use App\config\DataBaseConfigLocalTwitter;
use App\crawler\twitter\TwitterAPIDataCrawler;

error_reporting( E_ALL );

require "../vendor/autoload.php";

$crawler = new TwitterAPIDataCrawler(
    new DataBaseConfigLocalTwitter(),
    new ApiConfigTwitter()
);

$posts = $crawler->getPosts([
    "lang" => "hu",
    "q" => "szeged",
    "count" => 100
]);

$crawler->batchStorePosts($posts, 20);
