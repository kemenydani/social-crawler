<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 19:37
 */

namespace App\api\twitter;


use Abraham\TwitterOAuth\TwitterOAuth;
use App\api\APIController;
use App\data\twitter\TwitterPost;

class TwitterAPIController extends APIController implements TwitterAPIControllerInterface
{
    private $ac = null;
    private $api = null;

    /**
     * TwitterAPIController constructor.
     * @param TwitterApiConfig $ac
     */
    public function __construct(TwitterApiConfig $ac)
    {
        $this->ac = $ac;

        $this->api = new TwitterOAuth(...array_values([
            'consumerKey' => $ac::CONSUMER_KEY,
            'consumerSecret' => $ac::CONSUMER_SECRET,
            'oauthToken' => $ac::OAUTH_TOKEN,
            'oauthTokenSecret' => $ac::OAUTH_TOKEN_SECRET
        ]));
    }

    /**
     * @param array $query
     * @return TwitterPost[]|array
     */
    public function getPosts(array $query = [])
    {
        try
        {
            $apiResponse = $this->api->get("search/tweets", $query);
        }
        catch (\Exception $e)
        {
            $apiResponse = [];
        }

        if ($apiResponse)
        {
            return TwitterAPIController::processResponse($apiResponse);
        }
        return [];
    }

    /**
     * @param $response
     * @return TwitterPost[]|array
     */
    public static function processResponse($response)
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

    /**
     * @return TwitterOAuth|null
     */
    public function getApi(): ?TwitterOAuth
    {
        return $this->api;
    }
}
