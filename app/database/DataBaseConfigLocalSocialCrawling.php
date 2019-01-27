<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 18:00
 */

namespace App\database;


abstract class DataBaseConfigLocalSocialCrawling implements DataBaseConfigInterface
{
    /**
     * @const string
     */
    const PREFIX = '';
    /**
     * @const string
     */
    const HOST = 'localhost';
    /**
     * @const string
     */
    const DATABASE_NAME = 'social-crawling';
    /**
     * @const string
     */
    const USER_NAME = 'root';
    /**
     * @const string
     */
    const PASSWORD = '';
    /**
     * @const array
     */
    const OPTIONS = [];
}
