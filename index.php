<?php

error_reporting( E_ALL );

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth(
    "ERFfimCJ5BeSn32LU9NYC3WuK",
    "WMBRxbYwLXUrTBSGls4E9TKkwWFtHL1uj0pqwO4v6HogZldrEO",
    "1039515658025721856-DRmPc9HySGGfA3KNxgiG1gRCGhufe9",
    "QnQQ7mh9WoPtXg5Uu5fb1gCaIFmpgpkxuNxJ7B8XCrWpU");


//$content = $connection->get("account/verify_credentials");
$res = $connection->get("search/tweets", [
    "lang" => "hu",
    "q" => "szeged",
    "count" => 100
]);

$dsn = 'mysql:host=localhost;dbname=social-crawling';
$username = 'root';
$password = '';
$options = array(
    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

$db = new \PDO($dsn, $username, $password, $options);

foreach($res->statuses as $post){
    /* @var $post App\RawTwitterPost */
    $rawTwitterPost = new App\RawTwitterPost();
    $rawTwitterPost->setId($post->id);
    $rawTwitterPost->setText($post->text);

    $rawTwitterPost->setCreatedAt($post->created_at);

    $insertValues = [
        'pId' => 1,
        'extId' => $rawTwitterPost->getId(),
        'content' => $rawTwitterPost->getText(),
        'postedAt' => $rawTwitterPost->getCreatedAt(),
        'rawData' => $rawTwitterPost->toJson()
    ];

    $sql = $db->prepare("INSERT INTO crawl_post (pId, extId, content, postedAt, rawData) VALUES (:pId, :extId, :content, :postedAt, :rawData)");

    foreach($insertValues as $key => $value) {
        $sql->bindValue(':' . $key , $value);
    };

    $success = $sql->execute();

    var_dump($success);
}


/*
foreach($res->posts as $post) {
     //@var $post TwitterPost
}
*/