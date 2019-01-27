<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * TimeMachine: 26.01.2019
 * Time: 17:05
 */

namespace App\model\twitter;


use App\lib\JSON;
use App\model\twitter\TwitterPostEntityHashTag;

class TwitterPostEntities
{
    use JSON;

    var $hashtags = [];
    var $symbols = [];
    var $user_mentions = [];
    var $urls = [];
    
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


    /**
     * @return string
     */
    public function getOrderedHashTagList(): ?string
    {
        $pieces = [];

        foreach($this->getHashtags() as $hashTag){
            /* @var TwitterPostEntityHashTag $hashtag */
            $hashTag = new TwitterPostEntityHashTag(
                json_encode($hashTag)
            );
            $pieces[] = $hashTag ->getText() . ':' . $hashTag->getStartsAtChar() . ':' . $hashTag->getEndsAtChar();
        }

        return implode(',', $pieces);
    }
}