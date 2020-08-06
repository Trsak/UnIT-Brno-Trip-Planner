<?php

namespace App\FacebookApi;

class FacebookEvents
{
    /** @var string */
    private $appID; 

    /** @var string */
    private $appSecret;

    public function __construct($appID, $appSecret)
    {
        $this->appID = $appID;
        $this->appSecret = $appSecret;
    }

}