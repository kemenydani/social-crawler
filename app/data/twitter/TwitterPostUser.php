<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * TimeMachine: 26.01.2019
 * Time: 17:04
 */

namespace App\data\twitter;


use App\data\core\JSON;

class TwitterPostUser
{
    /**
     * @var
     */
    var $id;
    /**
     * @var
     */
    var $id_str;
    /**
     * @var
     */
    var $name;
    /**
     * @var
     */
    var $screen_name;
    /**
     * @var
     */
    var $location;
    /**
     * @var
     */
    var $description;
    /**
     * @var
     */
    var $url;
    //TODO: wtf??
    /**
     * @var
     */
    var $entities;
    /**
     * @var
     */
    var $protected;
    /**
     * @var
     */
    var $followers_count;
    /**
     * @var
     */
    var $friends_count;
    /**
     * @var
     */
    var $listed_count;
    /**
     * @var
     */
    var $created_at;
    /**
     * @var
     */
    var $favourites_count;
    /**
     * @var
     */
    var $utc_offset;
    /**
     * @var
     */
    var $time_zone;
    /**
     * @var
     */
    var $geo_enabled;
    /**
     * @var
     */
    var $verified;
    /**
     * @var
     */
    var $statuses_count;
    /**
     * @var
     */
    var $lang;
    /**
     * @var
     */
    var $contributors_enabled;
    /**
     * @var
     */
    var $is_translator;
    /**
     * @var
     */
    var $is_translation_enabled;
    /**
     * @var
     */
    var $profile_background_color;
    /**
     * @var
     */
    var $profile_background_image_url;
    /**
     * @var
     */
    var $profile_background_image_url_https;
    /**
     * @var
     */
    var $profile_background_tile;
    /**
     * @var
     */
    var $profile_image_url;
    /**
     * @var
     */
    var $profile_image_url_https;
    /**
     * @var
     */
    var $profile_link_color;
    /**
     * @var
     */
    var $profile_sidebar_border_color;
    /**
     * @var
     */
    var $profile_sidebar_fill_color;
    /**
     * @var
     */
    var $profile_text_color;
    /**
     * @var
     */
    var $profile_use_background_image;
    /**
     * @var
     */
    var $has_extended_profile;
    /**
     * @var
     */
    var $default_profile;
    /**
     * @var
     */
    var $default_profile_image;
    /**
     * @var
     */
    var $following;
    /**
     * @var
     */
    var $follow_request_sent;
    /**
     * @var
     */
    var $notifications;
    /**
     * @var
     */
    var $translator_type;

    use JSON;

    /**
     * TwitterPostUser constructor.
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
    public function getIdStr()
    {
        return $this->id_str;
    }

    /**
     * @param mixed $id_str
     */
    public function setIdStr($id_str): void
    {
        $this->id_str = $id_str;
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
    public function getScreenName()
    {
        return $this->screen_name;
    }

    /**
     * @param mixed $screen_name
     */
    public function setScreenName($screen_name): void
    {
        $this->screen_name = $screen_name;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location): void
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
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
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * @param mixed $entities
     */
    public function setEntities($entities): void
    {
        $this->entities = $entities;
    }

    /**
     * @return mixed
     */
    public function getProtected()
    {
        return $this->protected;
    }

    /**
     * @param mixed $protected
     */
    public function setProtected($protected): void
    {
        $this->protected = $protected;
    }

    /**
     * @return mixed
     */
    public function getFollowersCount()
    {
        return $this->followers_count;
    }

    /**
     * @param mixed $followers_count
     */
    public function setFollowersCount($followers_count): void
    {
        $this->followers_count = $followers_count;
    }

    /**
     * @return mixed
     */
    public function getFriendsCount()
    {
        return $this->friends_count;
    }

    /**
     * @param mixed $friends_count
     */
    public function setFriendsCount($friends_count): void
    {
        $this->friends_count = $friends_count;
    }

    /**
     * @return mixed
     */
    public function getListedCount()
    {
        return $this->listed_count;
    }

    /**
     * @param mixed $listed_count
     */
    public function setListedCount($listed_count): void
    {
        $this->listed_count = $listed_count;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getFavouritesCount()
    {
        return $this->favourites_count;
    }

    /**
     * @param mixed $favourites_count
     */
    public function setFavouritesCount($favourites_count): void
    {
        $this->favourites_count = $favourites_count;
    }

    /**
     * @return mixed
     */
    public function getUtcOffset()
    {
        return $this->utc_offset;
    }

    /**
     * @param mixed $utc_offset
     */
    public function setUtcOffset($utc_offset): void
    {
        $this->utc_offset = $utc_offset;
    }

    /**
     * @return mixed
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * @param mixed $time_zone
     */
    public function setTimeZone($time_zone): void
    {
        $this->time_zone = $time_zone;
    }

    /**
     * @return mixed
     */
    public function getGeoEnabled()
    {
        return $this->geo_enabled;
    }

    /**
     * @param mixed $geo_enabled
     */
    public function setGeoEnabled($geo_enabled): void
    {
        $this->geo_enabled = $geo_enabled;
    }

    /**
     * @return mixed
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * @param mixed $verified
     */
    public function setVerified($verified): void
    {
        $this->verified = $verified;
    }

    /**
     * @return mixed
     */
    public function getStatusesCount()
    {
        return $this->statuses_count;
    }

    /**
     * @param mixed $statuses_count
     */
    public function setStatusesCount($statuses_count): void
    {
        $this->statuses_count = $statuses_count;
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

    /**
     * @return mixed
     */
    public function getContributorsEnabled()
    {
        return $this->contributors_enabled;
    }

    /**
     * @param mixed $contributors_enabled
     */
    public function setContributorsEnabled($contributors_enabled): void
    {
        $this->contributors_enabled = $contributors_enabled;
    }

    /**
     * @return mixed
     */
    public function getisTranslator()
    {
        return $this->is_translator;
    }

    /**
     * @param mixed $is_translator
     */
    public function setIsTranslator($is_translator): void
    {
        $this->is_translator = $is_translator;
    }

    /**
     * @return mixed
     */
    public function getisTranslationEnabled()
    {
        return $this->is_translation_enabled;
    }

    /**
     * @param mixed $is_translation_enabled
     */
    public function setIsTranslationEnabled($is_translation_enabled): void
    {
        $this->is_translation_enabled = $is_translation_enabled;
    }

    /**
     * @return mixed
     */
    public function getProfileBackgroundColor()
    {
        return $this->profile_background_color;
    }

    /**
     * @param mixed $profile_background_color
     */
    public function setProfileBackgroundColor($profile_background_color): void
    {
        $this->profile_background_color = $profile_background_color;
    }

    /**
     * @return mixed
     */
    public function getProfileBackgroundImageUrl()
    {
        return $this->profile_background_image_url;
    }

    /**
     * @param mixed $profile_background_image_url
     */
    public function setProfileBackgroundImageUrl($profile_background_image_url): void
    {
        $this->profile_background_image_url = $profile_background_image_url;
    }

    /**
     * @return mixed
     */
    public function getProfileBackgroundImageUrlHttps()
    {
        return $this->profile_background_image_url_https;
    }

    /**
     * @param mixed $profile_background_image_url_https
     */
    public function setProfileBackgroundImageUrlHttps($profile_background_image_url_https): void
    {
        $this->profile_background_image_url_https = $profile_background_image_url_https;
    }

    /**
     * @return mixed
     */
    public function getProfileBackgroundTile()
    {
        return $this->profile_background_tile;
    }

    /**
     * @param mixed $profile_background_tile
     */
    public function setProfileBackgroundTile($profile_background_tile): void
    {
        $this->profile_background_tile = $profile_background_tile;
    }

    /**
     * @return mixed
     */
    public function getProfileImageUrl()
    {
        return $this->profile_image_url;
    }

    /**
     * @param mixed $profile_image_url
     */
    public function setProfileImageUrl($profile_image_url): void
    {
        $this->profile_image_url = $profile_image_url;
    }

    /**
     * @return mixed
     */
    public function getProfileImageUrlHttps()
    {
        return $this->profile_image_url_https;
    }

    /**
     * @param mixed $profile_image_url_https
     */
    public function setProfileImageUrlHttps($profile_image_url_https): void
    {
        $this->profile_image_url_https = $profile_image_url_https;
    }

    /**
     * @return mixed
     */
    public function getProfileLinkColor()
    {
        return $this->profile_link_color;
    }

    /**
     * @param mixed $profile_link_color
     */
    public function setProfileLinkColor($profile_link_color): void
    {
        $this->profile_link_color = $profile_link_color;
    }

    /**
     * @return mixed
     */
    public function getProfileSidebarBorderColor()
    {
        return $this->profile_sidebar_border_color;
    }

    /**
     * @param mixed $profile_sidebar_border_color
     */
    public function setProfileSidebarBorderColor($profile_sidebar_border_color): void
    {
        $this->profile_sidebar_border_color = $profile_sidebar_border_color;
    }

    /**
     * @return mixed
     */
    public function getProfileSidebarFillColor()
    {
        return $this->profile_sidebar_fill_color;
    }

    /**
     * @param mixed $profile_sidebar_fill_color
     */
    public function setProfileSidebarFillColor($profile_sidebar_fill_color): void
    {
        $this->profile_sidebar_fill_color = $profile_sidebar_fill_color;
    }

    /**
     * @return mixed
     */
    public function getProfileTextColor()
    {
        return $this->profile_text_color;
    }

    /**
     * @param mixed $profile_text_color
     */
    public function setProfileTextColor($profile_text_color): void
    {
        $this->profile_text_color = $profile_text_color;
    }

    /**
     * @return mixed
     */
    public function getProfileUseBackgroundImage()
    {
        return $this->profile_use_background_image;
    }

    /**
     * @param mixed $profile_use_background_image
     */
    public function setProfileUseBackgroundImage($profile_use_background_image): void
    {
        $this->profile_use_background_image = $profile_use_background_image;
    }

    /**
     * @return mixed
     */
    public function getHasExtendedProfile()
    {
        return $this->has_extended_profile;
    }

    /**
     * @param mixed $has_extended_profile
     */
    public function setHasExtendedProfile($has_extended_profile): void
    {
        $this->has_extended_profile = $has_extended_profile;
    }

    /**
     * @return mixed
     */
    public function getDefaultProfile()
    {
        return $this->default_profile;
    }

    /**
     * @param mixed $default_profile
     */
    public function setDefaultProfile($default_profile): void
    {
        $this->default_profile = $default_profile;
    }

    /**
     * @return mixed
     */
    public function getDefaultProfileImage()
    {
        return $this->default_profile_image;
    }

    /**
     * @param mixed $default_profile_image
     */
    public function setDefaultProfileImage($default_profile_image): void
    {
        $this->default_profile_image = $default_profile_image;
    }

    /**
     * @return mixed
     */
    public function getFollowing()
    {
        return $this->following;
    }

    /**
     * @param mixed $following
     */
    public function setFollowing($following): void
    {
        $this->following = $following;
    }

    /**
     * @return mixed
     */
    public function getFollowRequestSent()
    {
        return $this->follow_request_sent;
    }

    /**
     * @param mixed $follow_request_sent
     */
    public function setFollowRequestSent($follow_request_sent): void
    {
        $this->follow_request_sent = $follow_request_sent;
    }

    /**
     * @return mixed
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * @param mixed $notifications
     */
    public function setNotifications($notifications): void
    {
        $this->notifications = $notifications;
    }

    /**
     * @return mixed
     */
    public function getTranslatorType()
    {
        return $this->translator_type;
    }

    /**
     * @param mixed $translator_type
     */
    public function setTranslatorType($translator_type): void
    {
        $this->translator_type = $translator_type;
    }

}
