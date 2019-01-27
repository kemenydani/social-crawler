<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 18:00
 */

namespace App\config;


class DataBaseConfigLocalTwitter extends DataBaseConfig implements DataBaseConfigInterface
{
    static $prefix = 'crawl_tw_';
    static $host = 'localhost';
    static $database = 'social-crawling';
    static $user = 'root';
    static $password = '';
    static $options = [];
}
