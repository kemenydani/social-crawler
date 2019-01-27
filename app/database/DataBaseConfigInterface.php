<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 18:01
 */

namespace App\database;


interface DataBaseConfigInterface
{
    /**
     * @const string
     */
    const PREFIX = '';
    /**
     * @const string
     */
    const HOST = '';
    /**
     * @const string
     */
    const DATABASE_NAME = '';
    /**
     * @const string
     */
    const USER_NAME = '';
    /**
     * @const string
     */
    const PASSWORD = '';
    /**
     * @const array
     */
    const OPTIONS = [];
}