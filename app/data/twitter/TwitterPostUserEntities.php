<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * TimeMachine: 26.01.2019
 * Time: 17:22
 */

namespace App\data\twitter;


use App\data\core\JSON;

class TwitterPostUserEntities
{
    /**
     * @var array
     */
    var $hashtags = [];
    /**
     * @var array
     */
    var $symbols = [];
    /**
     * @var array
     */
    var $user_mentions = [];
    /**
     * @var array
     */
    var $urls = [];

    use JSON;

    /**
     * TwitterPostUserEntities constructor.
     * @param null|string $jsonString
     */
    public function __construct(?string $jsonString)
    {
        if (is_string($jsonString))
        {
            $this->populateFromJSON($jsonString);
        }
    }

    /**
     * @return array
     */
    public function getHashtags(): array
    {
        return $this->hashtags;
    }

    /**
     * @param array $hashtags
     */
    public function setHashtags(array $hashtags): void
    {
        $this->hashtags = $hashtags;
    }

    /**
     * @return array
     */
    public function getSymbols(): array
    {
        return $this->symbols;
    }

    /**
     * @param array $symbols
     */
    public function setSymbols(array $symbols): void
    {
        $this->symbols = $symbols;
    }

    /**
     * @return array
     */
    public function getUserMentions(): array
    {
        return $this->user_mentions;
    }

    /**
     * @param array $user_mentions
     */
    public function setUserMentions(array $user_mentions): void
    {
        $this->user_mentions = $user_mentions;
    }

    /**
     * @return array
     */
    public function getUrls(): array
    {
        return $this->urls;
    }

    /**
     * @param array $urls
     */
    public function setUrls(array $urls): void
    {
        $this->urls = $urls;
    }

}
