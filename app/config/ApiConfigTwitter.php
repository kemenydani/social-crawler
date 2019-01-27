<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 19:42
 */

namespace App\config;


class ApiConfigTwitter implements ApiConfigTwitterInterface
{
    static $consumerKey = 'ERFfimCJ5BeSn32LU9NYC3WuK';
    static $consumerSecret = 'WMBRxbYwLXUrTBSGls4E9TKkwWFtHL1uj0pqwO4v6HogZldrEO';
    static $oauthToken = '1039515658025721856-DRmPc9HySGGfA3KNxgiG1gRCGhufe9';
    static $oauthTokenSecret = 'QnQQ7mh9WoPtXg5Uu5fb1gCaIFmpgpkxuNxJ7B8XCrWpU';

    /**
     * @return string
     */
    public static function getConsumerKey(): string
    {
        return self::$consumerKey;
    }

    /**
     * @param string $consumerKey
     */
    public static function setConsumerKey(string $consumerKey): void
    {
        self::$consumerKey = $consumerKey;
    }

    /**
     * @return string
     */
    public static function getConsumerSecret(): string
    {
        return self::$consumerSecret;
    }

    /**
     * @param string $consumerSecret
     */
    public static function setConsumerSecret(string $consumerSecret): void
    {
        self::$consumerSecret = $consumerSecret;
    }

    /**
     * @return string
     */
    public static function getOauthToken(): string
    {
        return self::$oauthToken;
    }

    /**
     * @param string $oauthToken
     */
    public static function setOauthToken(string $oauthToken): void
    {
        self::$oauthToken = $oauthToken;
    }

    /**
     * @return string
     */
    public static function getOauthTokenSecret(): string
    {
        return self::$oauthTokenSecret;
    }

    /**
     * @param string $oauthTokenSecret
     */
    public static function setOauthTokenSecret(string $oauthTokenSecret): void
    {
        self::$oauthTokenSecret = $oauthTokenSecret;
    }

}