<?php
/**
 * Created by IntelliJ IDEA.
 * User: kemen
 * Date: 26.01.2019
 * Time: 20:11
 */

namespace App\config;


interface ApiConfigTwitterInterface
{
    /**
     * @return string
     */
    public static function getConsumerKey(): string;

    /**
     * @param string $consumerKey
     */
    public static function setConsumerKey(string $consumerKey): void;

    /**
     * @return string
     */
    public static function getConsumerSecret(): string;

    /**
     * @param string $consumerSecret
     */
    public static function setConsumerSecret(string $consumerSecret): void;

    /**
     * @return string
     */
    public static function getOauthToken(): string;

    /**
     * @param string $oauthToken
     */
    public static function setOauthToken(string $oauthToken): void;

    /**
     * @return string
     */
    public static function getOauthTokenSecret(): string;

    /**
     * @param string $oauthTokenSecret
     */
    public static function setOauthTokenSecret(string $oauthTokenSecret): void;
}
