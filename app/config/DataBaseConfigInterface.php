<?php
/**
 * Created by IntelliJ IDEA.
 * User: kemen
 * Date: 27.01.2019
 * Time: 13:03
 */

namespace App\config;


interface DataBaseConfigInterface
{
    /**
     * @return string
     */
    public static function getPrefix(): string;

    /**
     * @param string $prefix
     */
    public static function setPrefix(string $prefix): void;

    /**
     * @return string
     */
    public static function getHost(): string;

    /**
     * @param string $host
     */
    public static function setHost(string $host): void;

    /**
     * @return string
     */
    public static function getDatabase(): string;

    /**
     * @param string $database
     */
    public static function setDatabase(string $database): void;

    /**
     * @return string
     */
    public static function getUser(): string;

    /**
     * @param string $user
     */
    public static function setUser(string $user): void;

    /**
     * @return string
     */
    public static function getPassword(): string;

    /**
     * @param string $password
     */
    public static function setPassword(string $password): void;

    /**
     * @return array
     */
    public static function getOptions(): array;

    /**
     * @param array $options
     */
    public static function setOptions(array $options): void;
}