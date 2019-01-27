<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * TimeMachine: 26.01.2019
 * Time: 17:02
 */

namespace App\model\twitter;


use App\lib\JSON;

class TwitterPost
{
    /**
     * @var string
     */
    var $created_at;
    /**
     * @var int
     */
    var $id;
    /**
     * @var string
     */
    var $id_str;
    /**
     * @var string
     */
    var $text;
    /**
     * @var bool
     */
    var $truncated;
    /**
     * @var $entities TwitterPostEntities
     */
    var $entities;
    /**
     * @var $metadata TwitterPostMetaData
     */
    var $metadata;
    /**
     * @var string
     */
    var $source;
    /**
     * @var int
     */
    var $in_reply_to_status_id;
    /**
     * @var string
     */
    var $in_reply_to_status_id_str;
    /**
     * @var int
     */
    var $in_reply_to_user_id;
    /**
     * @var string
     */
    var $in_reply_to_user_id_str;
    /**
     * @var string
     */
    var $in_reply_to_screen_name;
    /**
     * @var $user TwitterPostUser
     */
    var $user;
    /**
     * @var string
     */
    var $geo;
    /**
     * @var string
     */
    var $coordinates;
    /**
     * @var string
     */
    var $place;
    /**
     * @var
     */
    var $contributors;
    /**
     * @var
     */
    var $is_quote_status;
    /**
     * @var
     */
    var $retweet_count;
    /**
     * @var
     */
    var $favorite_count;
    /**
     * @var
     */
    var $favorited;
    /**
     * @var
     */
    var $retweeted;
    /**
     * @var
     */
    var $possibly_sensitive;
    /**
     * @var string
     */
    var $lang;

    use JSON;

    public function __construct(?string $jsonString)
    {
        if (is_string($jsonString))
        {
            $this->populateFromJSON($jsonString);
        }
    }

    /**
     * @return string
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIdStr(): ?string
    {
        return $this->id_str;
    }

    /**
     * @param mixed $id_str
     */
    public function setIdStr(string $id_str): void
    {
        $this->id_str = $id_str;
    }

    /**
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

    /**
     * @return bool
     */
    public function getTruncated(): bool
    {
        return $this->truncated;
    }

    /**
     * @param bool $truncated
     */
    public function setTruncated(bool $truncated): void
    {
        $this->truncated = $truncated;
    }

    /**
     * @return
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * @param  $entities
     */
    public function setEntities($entities): void
    {
        $this->entities = $entities;
    }

    /**
     * @return
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source): void
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getInReplyToStatusId()
    {
        return $this->in_reply_to_status_id;
    }

    /**
     * @param mixed $in_reply_to_status_id
     */
    public function setInReplyToStatusId($in_reply_to_status_id): void
    {
        $this->in_reply_to_status_id = $in_reply_to_status_id;
    }

    /**
     * @return mixed
     */
    public function getInReplyToStatusIdStr()
    {
        return $this->in_reply_to_status_id_str;
    }

    /**
     * @param mixed $in_reply_to_status_id_str
     */
    public function setInReplyToStatusIdStr($in_reply_to_status_id_str): void
    {
        $this->in_reply_to_status_id_str = $in_reply_to_status_id_str;
    }

    /**
     * @return mixed
     */
    public function getInReplyToUserId()
    {
        return $this->in_reply_to_user_id;
    }

    /**
     * @param mixed $in_reply_to_user_id
     */
    public function setInReplyToUserId($in_reply_to_user_id): void
    {
        $this->in_reply_to_user_id = $in_reply_to_user_id;
    }

    /**
     * @return mixed
     */
    public function getInReplyToUserIdStr()
    {
        return $this->in_reply_to_user_id_str;
    }

    /**
     * @param mixed $in_reply_to_user_id_str
     */
    public function setInReplyToUserIdStr($in_reply_to_user_id_str): void
    {
        $this->in_reply_to_user_id_str = $in_reply_to_user_id_str;
    }

    /**
     * @return mixed
     */
    public function getInReplyToScreenName()
    {
        return $this->in_reply_to_screen_name;
    }

    /**
     * @param mixed $in_reply_to_screen_name
     */
    public function setInReplyToScreenName($in_reply_to_screen_name): void
    {
        $this->in_reply_to_screen_name = $in_reply_to_screen_name;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @param mixed $geo
     */
    public function setGeo($geo): void
    {
        $this->geo = $geo;
    }

    /**
     * @return mixed
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param mixed $coordinates
     */
    public function setCoordinates($coordinates): void
    {
        $this->coordinates = $coordinates;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place): void
    {
        $this->place = $place;
    }

    /**
     * @return mixed
     */
    public function getContributors()
    {
        return $this->contributors;
    }

    /**
     * @param mixed $contributors
     */
    public function setContributors($contributors): void
    {
        $this->contributors = $contributors;
    }

    /**
     * @return bool
     */
    public function getisQuoteStatus(): bool
    {
        return $this->is_quote_status;
    }

    /**
     * @param bool $is_quote_status
     */
    public function setIsQuoteStatus(bool $is_quote_status): void
    {
        $this->is_quote_status = $is_quote_status;
    }

    /**
     * @return int
     */
    public function getRetweetCount(): int
    {
        return $this->retweet_count;
    }

    /**
     * @param int $retweet_count
     */
    public function setRetweetCount(int $retweet_count): void
    {
        $this->retweet_count = $retweet_count;
    }

    /**
     * @return int
     */
    public function getFavoriteCount(): int
    {
        return $this->favorite_count;
    }

    /**
     * @param int $favorite_count
     */
    public function setFavoriteCount(int $favorite_count): void
    {
        $this->favorite_count = $favorite_count;
    }

    /**
     * @return bool
     */
    public function getFavorited(): bool
    {
        return $this->favorited;
    }

    /**
     * @param bool $favorited
     */
    public function setFavorited(bool $favorited): void
    {
        $this->favorited = $favorited;
    }

    /**
     * @return bool
     */
    public function getRetweeted(): bool
    {
        return $this->retweeted;
    }

    /**
     * @param bool $retweeted
     */
    public function setRetweeted(bool $retweeted): void
    {
        $this->retweeted = $retweeted;
    }

    /**
     * @return mixed
     */
    public function getPossiblySensitive(): bool
    {
        return $this->possibly_sensitive;
    }

    /**
     * @param mixed $possibly_sensitive
     */
    public function setPossiblySensitive(bool $possibly_sensitive): void
    {
        $this->possibly_sensitive = $possibly_sensitive;
    }

    /**
     * @return string
     */
    public function getLang(): ?string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang(?string $lang): void
    {
        $this->lang = $lang;
    }

}