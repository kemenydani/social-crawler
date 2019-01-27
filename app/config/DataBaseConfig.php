<?php
/**
 * Created by IntelliJ IDEA.
 * User: kemen
 * Date: 27.01.2019
 * Time: 13:00
 */

namespace App\config;


abstract class DataBaseConfig implements DataBaseConfigInterface
{
    static $prefix = '';
    static $host = '';
    static $database = '';
    static $user = '';
    static $password = '';
    static $options = [];

    /**
     * @return string
     */
    public static function getPrefix(): string
    {
        return static::$prefix;
    }

    /**
     * @param string $prefix
     */
    public static function setPrefix(string $prefix): void
    {
        static::$prefix = $prefix;
    }

    /**
     * @return string
     */
    public static function getHost(): string
    {
        return static::$host;
    }

    /**
     * @param string $host
     */
    public static function setHost(string $host): void
    {
        static::$host = $host;
    }

    /**
     * @return string
     */
    public static function getDatabase(): string
    {
        return static::$database;
    }

    /**
     * @param string $database
     */
    public static function setDatabase(string $database): void
    {
        static::$database = $database;
    }

    /**
     * @return string
     */
    public static function getUser(): string
    {
        return static::$user;
    }

    /**
     * @param string $user
     */
    public static function setUser(string $user): void
    {
        static::$user = $user;
    }

    /**
     * @return string
     */
    public static function getPassword(): string
    {
        return static::$password;
    }

    /**
     * @param string $password
     */
    public static function setPassword(string $password): void
    {
        static::$password = $password;
    }

    /**
     * @return array
     */
    public static function getOptions(): array
    {
        return static::$options;
    }

    /**
     * @param array $options
     */
    public static function setOptions(array $options): void
    {
        static::$options = $options;
    }

}