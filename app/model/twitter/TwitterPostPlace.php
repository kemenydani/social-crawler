<?php
/**
 * Created by IntelliJ IDEA.
 * User: kemen
 * Date: 27.01.2019
 * Time: 14:48
 */

namespace App\model\twitter;


use App\lib\JSON;

class TwitterPostPlace
{
    var $id;
    var $url;
    var $place_type;
    var $name;
    var $full_name;
    var $country_code;
    var $country;
    var $contained_within;
    var $bounding_box;
    var $attributes;
    var $contributors;
    var $is_quote_status;
    var $retweet_count;
    var $favorite_count;
    var $favorited;
    var $retweeted;
    var $possibly_sensitive;
    var $lang;

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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getPlaceType()
    {
        return $this->place_type;
    }

    /**
     * @param mixed $place_type
     */
    public function setPlaceType($place_type): void
    {
        $this->place_type = $place_type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * @param mixed $full_name
     */
    public function setFullName($full_name): void
    {
        $this->full_name = $full_name;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param mixed $country_code
     */
    public function setCountryCode($country_code): void
    {
        $this->country_code = $country_code;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getContainedWithin()
    {
        return $this->contained_within;
    }

    /**
     * @param mixed $contained_within
     */
    public function setContainedWithin($contained_within): void
    {
        $this->contained_within = $contained_within;
    }

    /**
     * @return mixed
     */
    public function getBoundingBox()
    {
        return $this->bounding_box;
    }

    /**
     * @param mixed $bounding_box
     */
    public function setBoundingBox($bounding_box): void
    {
        $this->bounding_box = $bounding_box;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $attributes
     */
    public function setAttributes($attributes): void
    {
        $this->attributes = $attributes;
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
     * @return mixed
     */
    public function getisQuoteStatus()
    {
        return $this->is_quote_status;
    }

    /**
     * @param mixed $is_quote_status
     */
    public function setIsQuoteStatus($is_quote_status): void
    {
        $this->is_quote_status = $is_quote_status;
    }

    /**
     * @return mixed
     */
    public function getRetweetCount()
    {
        return $this->retweet_count;
    }

    /**
     * @param mixed $retweet_count
     */
    public function setRetweetCount($retweet_count): void
    {
        $this->retweet_count = $retweet_count;
    }

    /**
     * @return mixed
     */
    public function getFavoriteCount()
    {
        return $this->favorite_count;
    }

    /**
     * @param mixed $favorite_count
     */
    public function setFavoriteCount($favorite_count): void
    {
        $this->favorite_count = $favorite_count;
    }

    /**
     * @return mixed
     */
    public function getFavorited()
    {
        return $this->favorited;
    }

    /**
     * @param mixed $favorited
     */
    public function setFavorited($favorited): void
    {
        $this->favorited = $favorited;
    }

    /**
     * @return mixed
     */
    public function getRetweeted()
    {
        return $this->retweeted;
    }

    /**
     * @param mixed $retweeted
     */
    public function setRetweeted($retweeted): void
    {
        $this->retweeted = $retweeted;
    }

    /**
     * @return mixed
     */
    public function getPossiblySensitive()
    {
        return $this->possibly_sensitive;
    }

    /**
     * @param mixed $possibly_sensitive
     */
    public function setPossiblySensitive($possibly_sensitive): void
    {
        $this->possibly_sensitive = $possibly_sensitive;
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param mixed $lang
     */
    public function setLang($lang): void
    {
        $this->lang = $lang;
    }

}
