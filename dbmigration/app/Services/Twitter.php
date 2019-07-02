<?php

namespace App\Services;


class Twitter
{

    protected $KEY;

    public function __construct($KEY)
    {
        $this->$KEY = $KEY;
    }
}
