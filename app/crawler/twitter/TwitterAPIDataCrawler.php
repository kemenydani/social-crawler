<?php

/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 18:11
 */

namespace App\crawler\twitter;


use App\config\ApiConfigTwitterInterface;
use App\handler\twitter\TwitterAPIHandler;
use App\crawler\APIDataCrawler;
use App\lib\DB;
use App\config\DataBaseConfigInterface;
use App\lib\TimeMachine;
use App\model\twitter\TwitterPost;
use App\model\twitter\TwitterPostCoordinates;
use App\model\twitter\TwitterPostEntities;
use App\model\twitter\TwitterPostGeo;
use App\model\twitter\TwitterPostPlace;
use App\model\twitter\TwitterPostUser;

class TwitterAPIDataCrawler extends APIDataCrawler implements TwitterDataCrawlerInterface
{
    private $DataBaseConfig;
    private $APIConfig;
    private $DataBaseHandler;
    private $APIHandler;

    public function __construct(DataBaseConfigInterface $DataBaseConfig, ApiConfigTwitterInterface $APIConfig)
    {
        /* @var $dbc DataBaseConfigInterface */
        $this->DataBaseConfig = $DataBaseConfig;
        /* @var $dbc ApiConfigTwitterInterface */
        $this->APIConfig = $APIConfig;

        $this->DataBaseHandler = new DB($DataBaseConfig);
        $this->APIHandler = new TwitterAPIHandler($this->APIConfig);
    }

    /**
     * @param TwitterPost[]|array $posts
     */
    public function storePosts(array $posts): void
    {
        $this->DataBaseHandler->beginTransaction();

        foreach($posts as $twitterPost)
        {
            /* @var TwitterPostUser $twitterPostUser */
            $twitterPostUser = new TwitterPostUser(
                json_encode($twitterPost->getUser())
            );

            /* @var TwitterPostUser $twitterPostPlace */
            $twitterPostPlace = new TwitterPostPlace(
                json_encode($twitterPost->getPlace())
            );

            $twitterGeo = new TwitterPostGeo(
                json_encode($twitterPost->getGeo())
            );

            $twitterCoordinates = new TwitterPostCoordinates(
                json_encode($twitterPost->getCoordinates())
            );

            $posX = count($twitterGeo->getCoordinates()) ? $twitterCoordinates->getX() : $twitterGeo->getX();
            $posY = count($twitterGeo->getCoordinates()) ? $twitterCoordinates->getY() : $twitterGeo->getY();

            $twitterEntities = new TwitterPostEntities(
                json_encode($twitterPost->getEntities())
            );

            $hashTags = $twitterEntities->getOrderedHashTagList();

            /* @var TwitterPost $twitterPost */
            $this->DataBaseHandler->insert('post', [
                'extId' => $twitterPost->getId(),
                'content' => $twitterPost->getText(),
                'placeExtId' => $twitterPostPlace->getId(),
                'userExtId' => $twitterPostUser->getId(),
                'posX' => $posX,
                'posY' => $posY,
                'hashTags' => $hashTags,
                'postedAt' => TimeMachine::formatToDateTime($twitterPost->getCreatedAt()),
                'rawData' => $twitterPost->toJSON()
            ]);

            $this->DataBaseHandler->insert('user', [
                'extId' => $twitterPostUser->getId(),
                'rawData' => $twitterPostUser->toJSON()
            ]);

            $this->DataBaseHandler->insert('place', [
                'extId' => $twitterPostPlace->getId(),
                'rawData' => $twitterPostPlace->toJSON()
            ]);
        }

        $this->DataBaseHandler->commit();
    }

    /**
     * @param array $queryParams
     * @return TwitterPost[]|array
     */
    public function getPosts($queryParams): array
    {
        return $this->APIHandler->getPosts($queryParams);
    }

    /**
     * @param $posts
     * @param int $batchSize
     */
    public function batchStorePosts($posts, $batchSize = 50)
    {
        $postChunks = array_chunk($posts, $batchSize);

        foreach($postChunks as $postChunk)
        {
            $this->storePosts($postChunk);
        }
    }

    /**
     * @param array $queryParams
     * @param int $batchSize
     */
    public function getAndStore(array $queryParams = [], $batchSize = 50)
    {
        $this->batchStorePosts($this->getPosts($queryParams), $batchSize);
    }

}
