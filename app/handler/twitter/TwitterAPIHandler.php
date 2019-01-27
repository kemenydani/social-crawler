<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 19:37
 */

namespace App\handler\twitter;


use Abraham\TwitterOAuth\TwitterOAuth;
use App\config\ApiConfigTwitterInterface;
use App\handler\APIHandler;
use App\model\twitter\TwitterPost;

class TwitterAPIHandler extends APIHandler
{
    private $ac = null;
    private $api = null;

    /**
     * TwitterAPIHandler constructor.
     * @param ApiConfigTwitterInterface $ac
     */
    public function __construct(ApiConfigTwitterInterface $ac)
    {
        $this->ac = $ac;

        $this->api = new TwitterOAuth(...array_values([
            'consumerKey' => $ac::getConsumerKey(),
            'consumerSecret' => $ac::getConsumerSecret(),
            'oauthToken' => $ac::getOauthToken(),
            'oauthTokenSecret' => $ac::getOauthTokenSecret()
        ]));
    }

    /**
     * @param array $queryParams
     * @return TwitterPost[]|array
     */
    public function getPosts(array $queryParams = [])
    {
        try
        {
            $apiResponse = $this->api->get("search/tweets", $queryParams);
        }
        catch (\Exception $e)
        {
            $apiResponse = [];
        }

        if ($apiResponse)
        {
            return TwitterAPIHandler::parseResponse($apiResponse);
        }
        return [];
    }

    /**
     * @param $response
     * @return TwitterPost[]|array
     */
    public static function parseResponse($response)
    {
        $posts = [];

        if (is_object($response)
            && property_exists($response, 'statuses'))
        {
            foreach($response->statuses as $status)
            {
                $posts[] = new TwitterPost(json_encode($status));
            }
        }
        return $posts;
    }

}
