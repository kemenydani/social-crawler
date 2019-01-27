<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 18:10
 */

namespace App\crawler;


abstract class APIDataCrawler implements DataCrawlerInterface
{
    private $DataBaseConfig;
    private $APIConfig;
    private $DataBaseHandler;
    private $APIController;

    /**
     * @return mixed
     */
    public function getDataBaseConfig()
    {
        return $this->DataBaseConfig;
    }

    /**
     * @return mixed
     */
    public function getAPIConfig()
    {
        return $this->APIConfig;
    }

    /**
     * @return mixed
     */
    public function getDataBaseHandler()
    {
        return $this->DataBaseHandler;
    }

    /**
     * @return mixed
     */
    public function getAPIController()
    {
        return $this->APIController;
    }

}
