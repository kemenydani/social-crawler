<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 18:11
 */

namespace App\crawler;


use App\data\core\DB;
use App\database\DataBaseConfigInterface;

class TwitterDataCrawler extends DataCrawler implements TwitterDataCrawlerInterface
{
    private $dbh = null;
    private $api = null;

    public function __construct(DataBaseConfigInterface $dbc)
    {
        $this->dbh = new DB($dbc);
    }

    public function query($queryParams){

    }
}