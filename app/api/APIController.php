<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel Kemeny
 * Date: 26.01.2019
 * Time: 19:37
 */

namespace App\api;


abstract class APIController
{
    private $ac = null;
    private $api = null;
    /**
     * @return mixed
     */
    public function getApi()
    {
        return $this->api;
    }

}